<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<?php include("head.html"); ?>
<body> 
	<div id="content">
	<?php include("title.html"); ?>
	<h2>Getting Started</h2>
	<p>This page describes how to get started with the open-source CQL IDE.</p>
	
	 <p>The suggested introductory course of study includes an introductory 
 <a href="https://www.categoricaldata.net/cql/wadt.pdf">paper</a> about CQL for computer scientists,
 introductory <a href ="https://www.categoricaldata.net/cql/lambdaconf.pdf">slides</a> 
 and <a href="https://www.youtube.com/watch?v=GkHce4zWmUk">video</a> about CQL from a functional programming perspective,
  introductory <a href ="https://www.categoricaldata.net/cql/Kensho-CategoricalDatabases_20190227.pdf">slides</a> 
 and <a href="https://www.youtube.com/watch?v=bk36__qkhrk">video</a> about CQL from a mathematical perspective,
 introductory <a href="https://www.nasa.gov/sites/default/files/ivv_wojtowicz_sketch_theory_as_a_framework_for_knowledge_management_090214.pdf">slides</a> 
 about category theory from a knowledge management perspective,
 a <a href="https://www.researchgate.net/publication/321302956_Categorical_Foundations_for_System_Engineering">paper</a>
  from <a href="https://www.nist.gov">NIST</a> arguing that category theory is critical for IT interoperability, and an
 introductory <a href="http://files.farka.eu/pub/Awodey_S._Category_Theory(en)(305s).pdf">textbook</a>
 on category theory, as well as a data science <a href="https://arxiv.org/abs/1903.10579">case study</a>.</p>
	
	<p> 
	See the <a href="https://github.com/CategoricalData/CQL/wiki">CQL Wiki</a>
	for links to JDBC drivers, known limitations, etc, 
	and the <a href="http://www.categoricaldata.net/help/index.html">CQL Manual</a>
	for a description of CQL's syntax and an index of the IDE's built-in examples.
	Once downloaded, double click <code>cql.jar</code> to open, or run <code>java -jar cql.jar</code> at the command line.
	To get started with CQL once it is running, see the examples below.</p>
	


	
<h2>Basics</h2>	
	
		<ul>
		
		<li>
		<h3><a href="tutorial.html">Tutorial</a></h3><p>This example (built-in to the IDE with name Tutorial) covers the basics of CQL: typesides, schemas, instances, mappings, queries, and data migration / data exchange / ETL.  It also illustrates "literate programming" in CQL, where the CQL file itself contains markdown/HTML that generates a web page describing the CQL file and its execution.  This example is recommended for all CQL users.  </p>
		</li>
	
		<li>
		<h3><a href="csv.php">Importing and exporting CSV files</a></h3><p>This example is recommended for anyone dealing with CSV data and is built-in to the IDE as QuickCSV.  It imports CSV files about land and water animals over the internet, demonstrates basic CQL operations, and then exports the data as local CSV files. </p>
		</li>
		
		<li>
		<h3><a href="sql.php">Importing and exporting SQL data over JDBC</a></h3><p>This example is recommended for anyone dealing with SQL data and is built-in to the IDE as QuickSQL.  It imports a cloud-based MySQL database about employees and departments into CQL, demonstrates basic CQL operations, and then exports the data into a CQL's in-memory SQL database, <a href="https://www.h2database.com/html/main.html">H2</a>.  Accessing any external SQL database management system in CQL requires adding the vendor's JDBC driver to the java classpath when running CQL; this example requires downloading <a href="https://dev.mysql.com/downloads/connector/j/5.1.html">MySQL connector-j version 5.1.47</a> and running CQL from the terminal in a directory containing both jar files (on Windows, replace <code>:</code> by <code>;</code>):
		
<pre>java -cp "cql.jar:mysql-connector-java-5.1.47.jar" catdata.ide.IDE</pre>
		
		</p>
		</li>
		
		
		<hr/>
		</ul>
		
		
		
<h2>SQL vs CQL</h2>	
	
	<ul>
		
		<li>
		<h3><a href="https://www.categoricaldata.net/help/vsSQL1.html">Difficult Queries</a></h3><p>This example (built-in to the IDE with name vsSQL1) defines a schema about employees and departments, with foreign keys taking each employee to the department they work in, each department to the department's secretary, and each employee to their manager.  The problem is to obtain a sub-database (including foreign keys), where every employee works in the same department as their manager and every department's secretary works in that department.  This problem is difficult without an automated theorem prover because the programmer must invent from scratch what is essentially an inductive hypothesis sufficient to guarantee closure under the business rules, a problem which is notoriously difficult to solve.  In practice on this problem a novice CQL user can try one different query per minute and arrive at a solution in an hour with 100% confidence, a development process similar to interactive theorem proving in <a href="https://coq.inria.fr">Coq</a>.    </p>
		</li>
	
		<li>
		<h3><a href="https://www.categoricaldata.net/help/vsSQL2.html">The dual of join</a>: <a href="https://en.wikipedia.org/wiki/Equivalence_class">quotients</a>, <a href="https://www.cs.indiana.edu/pub/techreports/TR599.pdf">tuple merges</a>,  <a href="https://en.wikipedia.org/wiki/Limit_(category_theory)">co-limits</a>, <a href="https://en.wikipedia.org/wiki/Pushout_(category_theory)">pushouts</a>, and more</h3><p>This example (built-in to the IDE with name vsSQL2) defines a schema about animals, land animals, water animals, and amphibians, and the problem is to compute the animals without double-counting the amphibians.  The problem is solved using CQL's sigma operation from <a href="https://en.wikipedia.org/wiki/Commutative_diagram">a co-span into a commutative square</a>.  This operation cannot be expressed in relational algebra and is awkward in SQL, leading to the development of specialized <a href="https://www.cs.ox.ac.uk/boris.motik/pubs/bkmmpst17becnhmarking-chase.pdf">chase engines</a> such as CQL.  </p>
		</li>
		
		<li>
		<h3><a href="https://www.categoricaldata.net/help/vsSQL3.html">The Chase</a></h3>
		<p>This example (built-in to the IDE with name vsSQL3) defines source table: 
		</p>
<pre>
DeptEmp(deptId int not null, mgrName varchar, empId int not null)
</pre>
<p>
and the problem is to populate these target tables:

<pre>
Dept(deptId int not null, mgrId  int not null, mgrName varchar) 
Emp (empId  int not null, wrksIn int not null)
</pre>
such that if <code>(d,m,n)</code> is in <code>Dept</code>, then <code>(m,d)</code> is in <code>Emp</code>; if <code>(e,d)</code> is in <code>Emp</code>, then <code>(d,M,N)</code> is in <code>Dept</code> for some <code>M</code> and <code>N</code>; and if <code>(d,n,e)</code> is in <code>DeptEmp</code>, then <code>(e,d)</code> is in <code>Emp</code> and <code>(d,M,n)</code> is in <code>Dept</code> for some <code>M</code>.
This specification is written using a formalism called <a href="https://en.wikipedia.org/wiki/Tuple-generating_dependency">tuple-generating dependencies</a>, the formal counterpart to many informal visual notations in existing ETL and schema mapping tools.  
</p>
		</li>
				
		<hr/>
		
	</ul>
		
		
<h2>Further Examples</h2>				
		<ul>
		<li>
		<h3><a href="eqs.php">Path Equations</a></h3><p>This example (built in to the IDE with name Employees) defines a schema about employees and departments, with foreign keys taking each employee to the department they work in, each department to the department's secretary, and each employee to their manager.  Two path equations enforce that every secretary works in the department they are the secretary for, and that every employee works in the same department as their manager. </p>
		</li>
		
		<li>
		<h3><a href="denorm.php">Transparent Denormalization</a></h3><p>  This example defines a normalized CQL schema containing information about males and their mothers.  The denormalized CQL schema contains an additional redundant attribute, the name of each male's mother, as well as an equation specifying how the redundant attribute is derived.  When the normalized data is loaded into the denormalized schema, the value of the redundant attribute is automatically computed.  The equation linking the redundant data to the master data will be respected by every CQL operation on the denormalized schema, ensuring that the redundant attribute can never become out of sync.	
		</p>
		</li>

		<li>
		<h3><a href="joinless.php">Transparent Joins</a></h3><p>
		This example defines a source schema about schools, faculty, and departments, and a CQL query to find everyone who works in a school whose largest department is mathematics.  The CQL query does not require any joins; in SQL, the query would require two joins.	</p>
		</li>
		
		<li>
		<h3><a href="quotient.php">Reflexive, Symmetric, Transitive Closure</a></h3><p>  This example defines a source schema about people and who likes whom and a target schema with a single entity representing groups connected by liking.  There exists a single schema mapping from the source to the target, and CQL's sigma operation along this mapping computes the connected groups.</p>
		</li>
		
		<li>
		<h3><a href="unitconv.php">High-assurance User-defined Functions</a></h3><p>  This example defines a source schema about American airplanes, which have wing spans in inches, and a target schema about European airplanes, which have wing spans in centimeters.  A user-defined function specifies how to convert inches to centimeters, and a query which does not convert inches to centimeters is rejected.  Although this example uses a relatively simply type conversion, CQL supports user-defined types defined by arbitrary equations.</p>
		</li>
		
		<li>
		<h3><a href="fk.php">Compile-time Foreign-key Checking</a></h3><p>  This example defines a source schema about departments, professors, and students, and a query to find all possible same-department professor-student advising matches.  The target schema relates matches, professors, students, and departments through four foreign-keys and an equation enforcing that in every match, the department the professor works in is the same as the department the student is majoring in.  A query that incorrectly populates the target schema is rejected at compile time.</p>
		</li>
		
		<li>
		<h3><a href="jdbc.php">More on SQL and CQL</a></h3>  <p>This example defines a source schema about employees and populates a CQL instance on that schema by querying a database using JDBC.  To be self-contained, this example creates an in-memory SQL database to import from using CQL's built-in SQL execution engine, <a href="https://www.h2database.com/html/main.html">H2</a>.  </p>
		</li>
		
		</ul>
					
				
	</div><!--close main-->
	<?php include("footer.html"); ?> 
</body>
</html>