<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<?php include("head.html"); ?>


<body>
	<div id="content">
	        <?php include("title.html"); ?>
<h2>SQL Import/Export Quick Start</h2> 

<p> This example is recommended for anyone dealing with SQL data and is built-in to the IDE as QuickSQL. It imports a cloud-based MySQL database about employees and departments into CQL, demonstrates basic CQL operations, and then exports the data back into the MySQL database. Accessing any SQL database management system in CQL requires adding the vendor's JDBC driver to the java classpath when running CQL; this example requires downloading <a href="https://dev.mysql.com/downloads/connector/j/5.1.html">MySQL connector-j version 5.1.47</a> and running CQL from the terminal in a directory containing both jar files (on Windows, replace <code>:</code> by <code>;</code>):

<pre>
java -cp "cql.jar:mysql-connector-java-5.1.47.jar" catdata.ide.IDE
</pre>
</p>

<hr />
		
<p>We start by viewing the database:
<pre>
command ViewSrc = exec_jdbc "jdbc:mysql://mysql.categoricaldata.net:3306/aql_tutorial?user=xxx&password=yyy" {
	"SELECT * FROM Employee"
	"SELECT * FROM Department"	
}
</pre>
<img src="images/examples/sql1.png" alt="sql1" width="700" />
</p>

<p>We next import that database into CQL.  
The only difference between the SQL and CQL tables is that in CQL we can see 
globally unique row numbers (that may vary from run to run) and references to these row numbers.
In this case, we are using a public MySQL DB that uses back-ticks for quotes and requires a time zone parameter. 
<pre>
instance EmpDept = import_jdbc_all "jdbc:mysql://mysql.categoricaldata.net:3306/aql_tutorial?user=xxx&password=yyy&serverTimezone=America/New_York" {
	options jdbc_quote_char = "`"
}
</pre>
<img src="images/examples/sql2a.png" alt="sql2a" width="700" />
<!--<img src="images/examples/sql2b.png" alt="sql2b" width="700" />-->
</p>
<p>We can examine the imported SQL schema, although we will not discuss it further here. 
<pre>
schema EmpDeptSch = schemaOf EmpDept
</pre>
<img src="images/examples/sql3a.png" alt="sql3a" width="700" />
</p>
<p>To export our imported instance back to SQL, we choose a prefix (here, <code>Out</code>).  
We export the data using <code>row</code> as the name of the column for CQL's row numbers.
Note that we export to CQL's built-in SQL Database (indicated by <code>""</code>; see the <a href="jdbc.php">other JDBC SQL example</a> for more details.)
We clean up in case a previous run left tables around.
<pre>
command Export = export_jdbc_instance EmpDept "" "Out" {
	options id_column_name = "row"
} 
</pre>
</p>
<!--<img src="images/examples/sql3b.png" alt="sql3b" width="700" />-->
<p>And now we can see the exported data in SQL.
<pre>
command ViewDst = exec_jdbc "" {
	"SELECT * FROM OutEmployee"
	"SELECT * FROM OutDepartment"	
}
</pre>
<img src="images/examples/sql4.png" alt="sql4" width="700" />
</p>
<p>
In its fully generality as described above, round tripping 
leads to redundant information.  See the <a href="jdbc.php">other JDBC SQL example</a> for a more refined import/export process that removes these redundancies.
</p>



				
	</div>
	
</body>
</html>
