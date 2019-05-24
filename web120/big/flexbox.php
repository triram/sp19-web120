<?php
    include "includes/header.php";
?>

<!-- START LEFT COL -->
<section>
    <p>As developers aimed to create responsive websites for any screen on a browser device they ran into complications when designing the layout for their pages. The flexible box module, or Flexbox for short, is a layout model that was introduced in CSS3. It was created as an alternative to using floats and table tools, and has allowed for improved responsive web design.</p>
    
    <p>Flexbox is one-dimensional, meaning it places items in either rows or columns, but not both. Scott Vandehey of spaceninja.com gives a simple explanation of this model: “A Flexbox layout consists of a flex container that holds flex items. The flex container can be laid out horizontally or vertically. This is referred to as the main axis. (Vandehey)” The items inside the container fall along the main axis and are able to resize themselves. They can either take up available space by growing or prevent overflowing by shrinking. Here is an example of six items in a flex container:</p>

    <!--
      Demo Flexbox 1 by Hugo Giraudel
      https://codepen.io/HugoGiraudel/pen/LklCv
    -->

    <ul class="flex-container">
      <li class="flex-item">1</li>
      <li class="flex-item">2</li>
      <li class="flex-item">3</li>
    </ul>

    <p>Flexbox was not the only new layout model. CSS Grid is also another method to design responsive websites. It is similar to styling with tables, except items in a grid’s container can overlap each other. Ayush Gupta of Youstart Labs states some notable differences between Flexbox and Grid. Unlike Flexbox, Grid is two-dimensional and can manage content on both columns and rows at the same time. Flexbox is better suited for smaller layouts and Grid is used for larger ones. One last important distinction Gupta makes is that “CSS Grid’s approach is layout-first while Flexbox’s approach is content-first. If you are well aware of your content before making layout, then blindly opt for Flexbox and if not, opt for CSS Grid. (Gupta)” Both Flexbox and CSS Grid are currently supported in most modern browsers such as Google Chrome, Firefox and Safari.</p>
</section>
<!-- END LEFT COL -->
    
<!-- START RIGHT COL -->
<aside>
    <h3>Works Cited</h3>
    <ul>
        <li>Gupta, Ayush. “Beginner's Guide To Choose Between CSS Grid And Flexbox.” Medium, Youstart Labs, 15 June 2018, <a href="https://medium.com/youstart-labs/beginners-guide-to-choose-between-css-grid-and-flexbox-783005dd2412" target="_blank">medium.com/youstart-labs/beginners-guide-to-choose-between-css-grid-and-flexbox-783005dd2412.</a> Web. 17 May 2019</li>
        <li>Vandehey, Scott. “What IS Flexbox?” Space Ninja, Space Ninja, 18 Sept. 2018, <a href="https://spaceninja.com/2015/08/24/what-is-flexbox/" target="_blank">spaceninja.com/2015/08/24/what-is-flexbox/.</a> Web. 17 May 2019</li>
    </ul>
</aside>
<!-- END RIGHT COL -->

<?php 
    include "includes/footer.php";
?>