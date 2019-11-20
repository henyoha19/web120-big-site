<?php include 'includes/config.php'?> 
<?php include 'includes/header.php'?>

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "henockyohak@gmail.com";  //place your/your client's email address here
        $toName = "Henock"; //place your client's name here
        $website = "Big Site Contact File Test";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('includes/multiple.php');#demonstrates multiple form elements

	?>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3> Website Development Cycle</h3>

 <p>Here's a website development life cycle resource links,</p> <p> 1.<a href="https://xbsoftware.com/blog/website-development-process-full-guide/" target="_top"> https://xbsoftware.com/blog/website-dev't...</a></p>
 <p>2.<a href="http://cs.tsu.edu/ghemri/CS117/ClassNotes/Web%20Development%20Life%20Cycle_small.htm" target="_top">http://cs.tsu.edu/ghemri/CS117/ClassNotes/...</a></p>
 <p>3.<a href="https://www.macronimous.com/resources/articles/web-development-life-cycle" target="_top">https://www.macronimous.com/resources/articles/...</a></p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include 'includes/footer.php'?>



    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
<!-- START Footer -->
