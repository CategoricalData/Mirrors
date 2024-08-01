<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<?php include("head.html"); ?>


<body>
	<div id="content">
	        <?php include("title.html"); ?>
					<h2>Path Equations</h2> 
					
					<p>Many data integration tasks require constructing many tables connected by foreign keys which satisfy business rules (data integrity constraints).  For example, a business rule about employees may require that every employ work in the same department as their manager.  Rules such as this are expressed in CQL schemas using path equations.  Every instance on a schema is guaranteed to respect its path equations, and all CQL constructions respect path equations.  
					</p>
					<p>This example (built in to the IDE with name Employees) defines a schema about employees and departments, with foreign keys taking each employee to the department they work in, each department to the department's secretary, and each employee to their manager.  Two path equations enforce that every secretary works in the department they are the secretary for, and that every employee works in the same department as their manager.	
					</p>
					
					<p>The schema is defined as:
					</p>
<p>					
<pre>typeside Ty = literal { 
	java_types
		String = "java.lang.String"
	java_constants
		String = "return input[0]"
}

schema S = literal : Ty {
	entities
		Employee 
		Department
	foreign_keys
		manager   : Employee -> Employee
		worksIn   : Employee -> Department
		secretary : Department -> Employee
	path_equations 
		manager.worksIn = worksIn
  		secretary.worksIn = Department
  	attributes
		first last	: Employee -> String
		name 		: Department -> String
}
</pre>
</p>
<br />
					<p>Every instance on this schema is guaranteed to satisfy the path equations.  One way to write instances is as a set of equations, with missing information inferred by CQL:
					</p>
<p>					
<pre>instance I = literal : S {
	generators 
		a b c : Employee
		m s : Department
	equations 
		first(a) = Al
		first(b) = Bob  last(b) = Bo
		first(c) = Carl 
		name(m)  = Math name(s) = CS
		manager(a) = b manager(b) = b manager(c) = c
		worksIn(a) = m worksIn(b) = m worksIn(c) = s
		secretary(s) = c secretary(m) = b 
		secretary(worksIn(a)) = manager(a)
		worksIn(a) = worksIn(manager(a))
}</pre>
</p>
<img src="images/examples/eqs1.png" alt="eqs1" width="700" />
<br />


<p>A screen shot of the entire development is shown below:</p>
<img src="images/examples/eqs2.png" alt="eqs2" width="700" />

	</div><!--close main-->
	<?php include("footer.html"); ?> 
</body>
</html>
