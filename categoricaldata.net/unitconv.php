<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<?php include("head.html"); ?>

<body>
 
	<div id="content">

	<?php include("title.html"); ?>
	
					<h2>High-assurance User-defined Functions</h2> 
					
					<p>Many data integration tasks require user defined functions (UDFs): for example, to convert inches to centimeters.  When UDFs are defined or used incorrectly, data can be silently corrupted.  In CQL, user-defined functions are first-class schema elements, and CQL's automated theorem proving technology seamlessly provides high-assurance compile-time aid to schemas with user-defined functions.
					</p>
					<p>This example (built in to the IDE with name Unit Conv) defines a source schema about American airplanes, which have wing spans in inches, and a target schema about European airplanes, which have wing spans in centimeters.  The type side specifies how to convert inches to centimeters, and a query which does not convert inches to centimeters is rejected.  Although this example uses a relatively simply type conversion, CQL supports user-defined types defined by arbitrary equations.
					</p>
					
					<p>We start by defining a type side that contains two user defined types, inches and centimeters, as well as a conversion between them:
					</p>
<p class="contcode">					
<pre>typeside Ty = literal { 
	java_types
		in = "java.lang.Double"
		cm = "java.lang.Double"		
	java_constants
		in = "return java.lang.Double.parseDouble(input[0])"
		cm = "return java.lang.Double.parseDouble(input[0])"
	java_functions
		inToCm : in -> cm = "return (2.54 * input[0])"		
}</pre>
</p>
<br />
					<p>The source and target schemas contain wingspans in inches (for American planes) and centimeters (for European planes):
					</p>
<p class="contcode">					
<pre>schema AmericanAirplane = literal : Ty {
	entities 
		Wing
	attributes
		wingLength : Wing -> in
}

schema EuropeanAirplane = literal : Ty {
	entities 
		Wing
	attributes
		wingLength : Wing -> cm
}</pre>
</p>
<br />
					<p>An American airplane instance is, for example: 
					</p>
<p class="contcode">					
<pre>instance Boeing747 = literal : AmericanAirplane {
	generators
		left right : Wing
	equations
		left.wingLength = right.wingLength
		left.wingLength = 500	
}</pre>
</p>
<img src="images/examples/unitconv1.png" alt="unitconv1" width="700" />
<br />

					<p>To convert an American airplane to a European airplane requires converting inches to centimeters:
					</p>
<p class="contcode">					
<pre>query AmericanToEuropean = literal : AmericanAirplane -> EuropeanAirplane {
	entities 
		Wing -> {from w:Wing
			    return wingLength -> inToCm(w.wingLength)}
}

instance Boeing747Metric = eval AmericanToEuropean Boeing747
</pre>
</p>
<img src="images/examples/unitconv2.png" alt="unitconv2" width="700" />

					<p>A similar query that omits the unit conversion is rejected:
					</p>
<p class="contcode">	
<pre>query AmericanToEuropean_disastrous_conversion = literal : AmericanAirplane -> EuropeanAirplane {
	entities 
		Wing ->	{from w:Wing
				 return wingLength -> w.wingLength}
}

Error in query AmericanToEuropean_disastrous_conversion: 
 in attribute wingLength, expected sort of wingLength(w) is cm 
 but wingLength(w) actually has sort in.
</pre>
</p>
<br />
					<p>A screen shot of the entire development is shown below:</p>
<img src="images/examples/unitconv3.png" alt="unitconv3" width="700" />

				
	</div><!--close main-->
	<?php include("footer.html"); ?> 
</body>
</html>
