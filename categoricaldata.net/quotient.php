<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<?php include("head.html"); ?>


<body>
	<div id="content">
	        <?php include("title.html"); ?>
	<h2>Quotients and Merging</h2> 
					
					<p>Computing the quotient of a set by an equivalence relation (a so-called tuple merge) is a common data integration operation that is unwieldly in SQL but is easy in CQL, as we demonstrate below (built-in to the IDE with example name Quotient). 
					</p>
					<p>The example defines a source schema about people and who likes whom and a target schema with a single entity representing groups connected by liking.  There is a single schema mapping from the source to the target, and CQL's sigma  operation along this mapping computes the connected groups.					
					</p>
					
					<p>We start by defining a source schema for people and who likes whom.  For brevity, we do not define any types (String, Integer, etc) and use the empty typeside:
					</p>
<p class="contcode">					
<pre>typeside Ty = empty

schema Likes = literal : Ty {
	entities
		Like 
		Person
	foreign_keys
		likee : Like -> Person
		liker : Like -> Person
}</pre>
</p>
<br />
					<p>Here is some sample data, taken from a popular TV show:
					</p>
<p class="contcode">					
<pre>instance SimpsonsLikes = literal : Likes {
	generators
		Ned Maud Rodd Todd MrBurns Smithers : Person
		l1 l2 l3 l4 : Like
	equations
		l1.liker = Ned  l1.likee = Maud
		l2.liker = Maud l2.likee = Rodd
		l3.liker = Rodd l3.likee = Todd
		
		l4.liker = Smithers l4.likee = MrBurns
}</pre>
</p>
<img src="images/examples/quotient1.png" alt="quotient1" width="700" />
<br />

					<p>Our goal is to group together all the people who are transitively connected by liking.  The target schema contains a single entity called Connection:
					</p>
<p class="contcode">					
<pre>schema Connections = literal : Ty {
	entities
		Connection 
}</pre>
</p>
<br />
					<p>Next, we define a schema mapping (in fact, the only mapping possible) from Likes to Connections: 
					</p>
<p class="contcode">					
<pre>mapping FindConnections = literal : Likes -> Connections {
	entities
		Person -> Connection
		Like   -> Connection
	foreign_keys
		likee  -> Connection
		liker  -> Connection	
}</pre>
</p>
<br />
				<p>To find the connected groups, we use CQL's sigma operation:   
				</p>	
<p class="contcode">					
<pre>instance SimpsonsConnections = sigma FindConnections SimpsonsLikes
</pre>
</p>	
<br />
				<p>The IDE reports that there are two groups, each of which is named by a particular representative of the group:
				</p>
				<img src="images/examples/quotient2.png" alt="quotient2" width="700" />

				<p>To determine which group a person is in, we use CQL's unit operation:
				</p>
<p class="contcode">					
<pre>transform whichConnection = unit FindConnections SimpsonsLikes
</pre>
</p>		
<img src="images/examples/quotient3.png" alt="quotient3" width="700" />
<p>A screen shot of the entire development is shown below:</p>
<img src="images/examples/quotient4.png" alt="quotient4" width="700" />

				
	</div><!--close main-->
	<?php include("footer.html"); ?> 
</body>
</html>
