<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<?php include("head.html"); ?>


<body>
	<div id="content">
	        <?php include("title.html"); ?>
					<h2>CSV Import/Export</h2> 
					
<p>This example is recommended for anyone dealing with CSV data and is built-in to the IDE as QuickCSV. 
It imports a set of cloud-based CSV files about land and water animals into CQL, 
demonstrates basic CQL operations, and then exports the data to a local CSV file. 
We use SQL types (String, Integer, etc).  </p>

<p> Our land and water schemas share a common overlap schema about amphibians,
 which we express using an import statement. </p>

<pre>
schema AmphibianSchema = literal : sql {
	entities 
		Amphibian Animal
	foreign_keys 
		toAnimal : Amphibian -> Animal    
	attributes	
	     species : Animal -> String }
</pre>
<p>The schemas have data integrity constraints stating that every amphibian is an animal in one way.
See <a href="eqs.php">the path equality example</a> for details.
<pre>
schema LandSchema = literal : sql {
	imports
		AmphibianSchema
	entities
		LandAnimal	
	foreign_keys 
		isA : Amphibian  -> LandAnimal
		isA : LandAnimal -> Animal
	path_equations 
		Amphibian.isA.isA = Amphibian.toAnimal }
</pre> 
<pre>
schema WaterSchema = literal : sql {
	imports
		AmphibianSchema 
	entities
		WaterAnimal	
	foreign_keys 
		isA : Amphibian  -> WaterAnimal
		isA : WaterAnimal -> Animal
	path_equations 
		Amphibian.isA.isA = Amphibian.toAnimal     } 
</pre>
<p> Next, we import <a href="categoricaldata.net/demo/">CSV files</a> over the internet.  
CQL expects one file per entity, with one column
per foreign key or attribute.  
<img src="images/examples/csv1.png" alt="csv1" width="700" />
</p>  
<p>
There are many options, such as providing a column to column
name mapping during import, or to generate missing fields, etc; for details, see the built-in
CSV example.  </p>
<pre>
instance LandInstance = import_csv "http://categoricaldata.net/demo/LandDB/" : LandSchema 

instance WaterInstance = import_csv "http://categoricaldata.net/demo/WaterDB/" : WaterSchema 
</pre>
<img src="images/examples/csv2.png" alt="csv2" width="700" />
<p> We conclude by exporting our data to a set of CSV files locally. 
First we clear out a folder, and the we export to the given folder. </p>
<pre>
command clear = exec_cmdline { "rm -rf exportedLand" }

command exportLand = export_csv_instance LandInstance "exportedLand/"
</pre>
<p>
It's recommended to use a trailing slashes to indicate a directory, 
 but the string is actually used as a prefix in a URL. We can import the
local CSV data like so:</p>
<pre>
instance backAgain = import_csv "exportedLand/" : LandSchema
</pre>

	</div><!--close main-->
	<?php include("footer.html"); ?> 
</body>
</html>
