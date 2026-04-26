<div align="center"> <h1>  Object-Oriented Programming - Collatz Conjecture in PHP </h1> </div>
<div align="center"><i>Author: Nikola Odjakov</i></div>

<br><br>
<div align="center"> <h2 >The Collatz Conjecture </h3> </div>
<p> The Collatz Conjecture is a simple yet unsolved mathematical problem. It states that for any positive integer, repeatedly applying the following rules will always eventually lead to 1: If the number is even, divide it by 2; if it’s odd, multiply it by 3 and add 1. </p>

<br><br>
<div align="center"> <h2>--Project Description--</h2>  </div>


<br><br>
  <div align="center"> <h2>Assignment 1 - Part 1</h2> </div>

  <p>The task for Assignment 1 was to create a PHP program to calculate the mathematical function 3x + 1 (Collatz conjecture). Part 1 accomplishes the task in a procedural way. </p>


<br>
<div align="center">  <h2>Assignment 2 - Part 2 - OOP: Object, Methods, Access Modifiers, $this, Constructor</h2> </div>
  <p> The task for the second assignment, was to rewrite the first solution into OOP. I moved the class code to a separate file named <b>userCollatzClass.php.</b>".
    <ul>
  <li> As per the task requirements, I appended a constructor to enable the ability for the user to add a starting number. </li>
 <li> I also created a separate method <b>(IntervalCalculate)</b> to perform calculations based on a user-specified interval.</li> 
<li>I created a method called <b>"gloriousStatistics"</b>,  which returns: </li>
   <li>the number with the maximum amount of iterations; </li>
<li>  The number with minimum iterations;  </li>
 <li> The number with the highest reached value.  </li> </ul>
  <br>
<div align="center">  <h2>Assignment 3 - Part 3 - Inheritance, constants</h2> </div>

  <p>For the third task, as per the task requirements, I created a subclass called <b>Histogram</b> for userCollatzClass.php so I can demonstrate inheritance. Within the subclass, I wrote a new method (<b>createHistogramDisplay</b>) which can calculate the histogram statistics of the Collatz values from the <b>intervalCalculate</b> method. </p>
  <p>I defined appropriate variable modifiers to properly manage scope in the program.</p>
   <p> I also integrated 4 new constant values for the collatzCalculate method, as both a way to fulfill the task requirement, but also to improve the ease of understanding the method through valid variable naming, to better see the collatz method in action. </p>

  <br>
<div align="center"><h2>Assignment 4 UML class diagram - Part 4 - Implement another class into the program</h2> </div>
  <p>Since the task required a UML diagram with three classes (and I initially had only two), I expanded the program’s functionality further.</p>
  <p>I decided to create another class called <b>IterationPeakGapAnalyze</b>. I decided to make this class when after troubleshooting the previous versions, I developed a curiosity by a specific part of the Collatz Conjecture.
    Due to the fact that the peak count of iterations for any given number was not inherently dependent on the height of the number itself, I decided to make a class which tracks every peak record number of iterations within an interval, and specifically the gap between them. </p>

<br><br>
<div align="center">  <h2> ** PART 5 -  TO BE CONTINUED ** </h2> </div>
  <p>I’m considering adding a feature that updates a live graph of iteration peaks in real time as calculations progress. I will also integrate a ticker mechanism which makes the live-updating graph more user friendly. </p>
</div>

<br>
<div align="center"><h2>Usage</h2></div>

<p> To run Assignments 2–4, open the project in your IDE and execute the entry point 3xplus1oop.php. </p>

<br><br>
<div align="center"> <h4> License </h4>
 <i>This project is licensed under the <b> MIT License. </b> See the LICENSE file for details.</i> </div>

