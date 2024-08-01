<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php include("head.html"); ?>
<body>
<div id="content">
<?php include("title.html"); ?>

<h2> <b>Read This First</b> </h2>

<p>The suggested introductory course of study includes an introductory 
 <a href="https://arxiv.org/abs/2301.04846">paper</a> about CQL for computer scientists,
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

<h2>Papers</h2> 
<ul>
<li> <a href="https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0024274">Ologs: A Categorical Framework for Knowledge Representation</a> (2011) [<a href="http://arxiv.org/pdf/1102.1889.pdf">Pre-print</a>]
<p> Describes how to use categories as database/ontology schemas.</p>
</li>
<li> <a href="https://www.sciencedirect.com/science/article/pii/S0890540112001010">Functorial Data Migration</a> (2013) [<a href="http://arxiv.org/abs/1009.1166">Pre-print</a>]</li>
<p> Describes how to migrate data between categorical databases.</p>
<li> <a href="https://www.cambridge.org/core/journals/mathematical-structures-in-computer-science/article/database-queries-and-constraints-via-lifting-problems/9B3D9C74EB12F65BAD045D53C8D4549F">Database Queries and Constraints via Lifting Problems</a> (2013) [<a href="http://arxiv.org/abs/1202.2591">Pre-print</a>]</li>
<p> Describes how certain common database queries and constraints can be encoded as topological lifts.</p>
<li> <a href="http://categoricaldata.net/cql/fql_def.pdf">Definition of CQL as a context-free grammar with equations </a> (2015)</li>
<p> Describes a canonical syntax associated with CQL, as well as an axiomatic semantics.</p>
<li> <a href="https://dl.acm.org/citation.cfm?doid=2815072.2815075">Relational Foundations for Functorial Data Migration </a> (2015) [<a href="http://arxiv.org/abs/1212.5303">Pre-print</a>] [<a href="cql/relfound_slides.pdf">slides</a>]</li>
<p> Describes how to implement a fragment of CQL using SELECT/FROM/WHERE/UNION and a fresh-ID generator, and vice versa. </p>
<li> <a href="http://arxiv.org/abs/1511.06459">QINL: Query-Integrated Languages</a> (2015)</li>
<p> Describes the relationship between CQL and comprehension/monad syntax.<p>
<li> <a href="https://link.springer.com/chapter/10.1007/978-3-319-72044-9_5">Algebraic Model Management: A Survey</a> (2016) [<a href="https://arxiv.org/abs/2301.04846">Pre-print</a>]</li>
<p> Describes CQL entirely in terms of multi-sorted equational logic, and contrasts it with existing tools.  </p> 
<li> <a href="http://www.tac.mta.ca/tac/volumes/32/16/32-16abs.html">Algebraic Databases</a> (2017) [<a href="http://arxiv.org/abs/1602.03501">Pre-print</a>] </li>
<p> Describes CQL in detail, and in particular, user-defined functions.  </p>
<li> <a href="https://www.cambridge.org/core/journals/journal-of-functional-programming/article/algebraic-data-integration/AC36B1C39D4C76A18CB54F75B0D26796">Algebraic Data Integration</a> (2017)  [<a href="http://arxiv.org/abs/1503.03571">Pre-print</a>] [<a href="cql/jfpslides.pdf">slides</a>] [<a href="cql/agg.pdf">Aggregation supplement</a>] [<a href="https://www.youtube.com/watch?v=hISpkiJLWfM">video</a>]</li>
<p> Describes CQL in detail, and in particular, how to implement it using automated theorem proving techniques and how to use it to integrate data.  </p>
<li> <a href="https://arxiv.org/abs/2001.00338">Informal Data Transformation Considered Harmful</a> (2019) </li>
<p> Describes how CQL can preserve the data quality required to power machine learning algorithms through various data management tasks.  </p>
<li> <a href="https://arxiv.org/abs/2205.02425">Fast Left Kan Extensions Using the Chase</a> (2022) </li>
<p> Describes CQL's sigma operation in detail, and in particular, how to implement it using a chase engine.  </p>
<li> <a href="https://arxiv.org/abs/2404.01406">Presenting Profunctors</a> (2024)</li>
<p> Motivated by problems in categorical database theory, we introduce and compare two notions of presentation for profunctors, uncurried and curried. </p>

</ul>


<h2>Case Studies</h2> 
<ul>
<li> <a href="http://computingengineering.asmedigitalcollection.asme.org/article.aspx?articleid=2539429">Using Category Theory to Facilitate Multiple Manufacturing Service Database Integration</a> (2017) [<a href="cql/JCISC.pdf">Pre-print</a>] [<a href="http://arxiv.org/abs/1502.05947">Companion Report</a>]</li>
<p> Describes how CQL can be used for ontology-driven semantic search, and applied to commercial supply chains.  Joint work with NIST, it extends the RDF-based approach previously pursued by NIST. </p>
<li> <a href="https://doi.org/10.1016/j.commatsci.2019.04.002">Categorical Data Integration for Computational Science</a> (2019) [<a href="http://arxiv.org/abs/1903.10579">Pre-print</a>] [<a href="https://github.com/kris-brown/cql_data_integration">Code</a>] [<a href="cql/chempres.pdf">Slides</a>] </li> 
<p> Describes how CQL can be used to integrate scientific data sets, such as those in quantum chemistry.  Joint work with Stanford.  </p>
<li> <a href="http://www.cs.ox.ac.uk/ACT2019/preproceedings/John%20Nolan,%20Blake%20Pollard,%20Spencer%20Breiner,%20Dhananjay%20Anand%20and%20Eswaran%20Subrahmanian.pdf">Compositional Models for Power Systems</a> (2019) [<a href="https://www.youtube.com/watch?v=BFVXCxiM9fU">Video</a>] [<a href="https://drive.google.com/file/d/1mmCjjsJrKHAeAe3lalIcFhIw0fDqT-7Q/view">Slides</a>]</li>
<p> Describes how CQL can be used to integrate mathematical models of power grids in a modular way.  Independent work by NIST. </p>
<li> <a href="cql/FinanceIntegration.pdf">Financial Reporting Data Warehousing with CQL</a> (2019) </li>
<p>Describes how CQL can be used to construct data warehouses suitable for client reporting in financial asset management. </p>
<li> <a href="https://arxiv.org/abs/1909.04881">Algebraic Property Graphs</a> (2019) [<a href="https://github.com/CategoricalData/ApgCoq">Coq code</a>] [<a href="help/APG.html">CQL code</a>] [<a href="https://github.com/CategoricalData/CQL/tree/master/src/main/java/catdata/apg">Java code</a>]</li>
<p> Describes how CQL can be used to integrate enterprise knowledge graphs.  Joint work with Uber.  </p>
<li> <a href="https://arxiv.org/abs/2403.01630">Relational to RDF Data Migration by Query Co-Evaluation</a> (Draft, 2021)</li>
<p> Describes how CQL can be used to migrate relational data to RDF form, using the FIBO financial RDF ontology as an example. </p>
<li> <a href="https://arxiv.org/abs/2209.14457">Consensus-Free Spreadsheet Integration</a> (Draft, 2022) </li>
<p> Describes how CQL can be used to integrate spreadsheets.  Join work with Chevron. </p>
</ul>


<h2>Presentations</h2> 
<ul>
<li> <a href="cql/introSlides.pdf">Boston Haskell</a> (2011) [videos <a href="https://www.youtube.com/watch?v=wJIpI0Fj6Hg">1</a> <a href="https://www.youtube.com/watch?v=Bm41eCX13c0">2</a> <a href="https://www.youtube.com/watch?v=5RzRdhT8VTo">3</a> <a href="https://www.youtube.com/watch?v=jmuTZuj1-dg">4</a> <a href="https://www.youtube.com/watch?v=EREslJdIOB0">5</a>] </li>
<p> Gives an introduction to the math behind CQL. </p>
<li> <a href="cql/oracle.pdf">Oracle</a> (2014)</li>
<p> Gives an introduction to the math behind CQL, tailored to database-centric audiences. </p>
<li> <a href="cql/haskell.pdf">Boston Haskell</a> (2014) [<a href="https://www.youtube.com/watch?v=Q0m8baqBrk4">video</a>] </li>
<p> Gives an introduction to the math behind CQL, tailored to functional-programming audiences. </p>
<li> <a href="cql/lambdaconf.pdf">Lambda Conf</a> (2017) [<a href="https://www.youtube.com/watch?v=GkHce4zWmUk">video</a>]</li>
<p> Gives an introduction to CQL for computer scientists. </p>
<li> <a href="cql/Broad_SoftEng.pdf">The Broad Institute </a> (2017) [<a href="https://www.youtube.com/watch?v=fTporauBJEs">video</a>] </li>
<p> Gives an introduction to the math behind CQL, and lessons learned from applying it in practice. </p>
<li> <a href="cql/dataversity.pdf">Dataversity Architecture Summit</a> (2017) </li>
<p> Gives an introduction to CQL tailored to data architects. </p>
<li> <a href="cql/Kensho-CategoricalDatabases_20190227.pdf">Kensho</a> (2019) [<a href="https://www.youtube.com/watch?v=bk36__qkhrk">video</a>] </li>
<p> Gives an introduction CQL and the math behind it, and describes how it enables universal semantic IT inter-operability. </p>
<!--
<li> <a href="cql/intro.pdf">Functorial Data Migration</a> [and the <a href="https://www.youtube.com/watch?v=GizBg4M3bII">video</a>] </li>
<li> <a href="cql/int.pdf">Functorial Data Integration</a> [and the <a href="http://youtu.be/DqZDqUpp0rE">video</a>] </li>
<li> <a href="cql/comp.pdf">Computational Schemas</a> [and the <a href="http://youtu.be/E1OWa-lTHbg">video</a>] </li> -->
</ul>
</li>

<h2>Related</h2> 
<ul>
<li> <a href="http://www.cs.ox.ac.uk/files/3395/PRG72.pdf">A Categorical Manifesto</a> (1991) </li>
<p> Describes why category theory matters: how it is useful in computer science. </p>
<li> <a href="http://link.springer.com/chapter/10.1007/3-540-46093-4_14">A Model Theory for Generic Schema Management</a> (2003) </li>
<p> Describes how category theory can be used to study schema mappings in the sense of traditional database theory. </p>
<li> <a href="https://pdfs.semanticscholar.org/b8c8/5a3e7a04020259ec9a58c7e5563033f52844.pdf">Formal Modelling and Application of Graph Transformations in the Resource Description Framework</a> (2009)</li>
<p> Describes various categories of RDF graphs in functorial-semantics style.</p>
<li> <a href="http://link.springer.com/chapter/10.1007/978-3-642-41366-7_24">Allegories for Database Modeling</a> (2013) </li>
<p> Describes a relational variation of the math behind CQL based on allegories rather than categories.
<li> <a href="https://www.nasa.gov/sites/default/files/ivv_wojtowicz_sketch_theory_as_a_framework_for_knowledge_management_090214.pdf">Sketches as a Framework for Knowledge Management</a> (2014)</li>
<p> Describes how CQL and related Sketch-based formalisms can be used to integrate knowledge representations. </p>
<li> <a href="http://www.appliedcategorytheory.org/wp-content/uploads/2017/09/Rosebrugh-Implementing-database-design-and-manipulation-categorically.pdf">Entity-Attribute Sketches</a> (2015)</li>
<p> Describes EASIK, a category-theoretic predecessor to CQL that now ships within, and interoperates with, CQL. </p>
<li> <a href="http://arxiv.org/abs/1706.00526">Knowledge Representation in Bicategories of Relations</a> (2017)</li>
<p> Describes the math behind the allegorical approach to database modeling. </p>
<li> <a href="https://link.springer.com/chapter/10.1007/978-3-030-79382-1_24">Category Theory Framework for Variability Models with Non-functional Requirements</a> (2021) </li>
<p> Describes an application of CQL to software engineering.  [<a href="https://www.youtube.com/channel/UCzWhCiBZsna0M5rLLqB-ALw/videos">video</a>]
<li> <a href="https://arxiv.org/abs/2403.19884">Representing Knowledge and Querying Data using Double-Functorial Semantics</a> (2024) </li>
<p> Describes how the abstract structure of a 'double category of relations' is a flexible and expressive language in which to represent knowledge. </p>

</ul>



</div>
</body>
</html>
