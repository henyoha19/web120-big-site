<?php include 'includes/config.php'?> 
<?php include 'includes/header.php'?> 

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
     <p>Flexbox is a layout model that allows elements to align and distribute space within a container. Using flexible widths and heights, elements can be aligned to fill a space or distribute space between elements, which makes it a great tool to use for responsive design systems. The main idea behind the flex layout is to give the container the ability to alter its items' width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space or shrinks them to prevent overflow.</p>
        <h3> Browser Support</h3>
    <p> Flexbox has been around since 2009, and it’s beginning to be widely supported by all modern browsers. If you look at Flexbox on Can I Use? you’ll see that it has great support across the board.
    There are some problems in IE8 and IE9, but that’s to be expected. At Brolik.com they implement a fallback system using a Sass style sheet and a javascript file to account for these older browsers.</p>
        <h3> What is Polyfill or shim ?</h3>
    <p> A polyfill is a browser fallback, made in JavaScript, that allows functionality you expect to work in modern browsers to work in older browsers, e.g., to support canvas (an HTML5 feature) in older browsers.
    A polyfill, or polyfiller, is a piece of code (or plugin) that provides the technology that you, the developer, expect the browser to provide natively. Flattening the API landscape if you will.</p> 
    <h3>Conclusion</h3>
    <p> As shown above adding Flexbox in our CSS is therefore very important for our web development process specially to have better responsive layout. However, we must careful when we analyze the browser support issue. Although it works in most modern browsers, but the users might still use the old version. So, we have to spend some time to deal with this issue. Also, we may consider the polyfill or shim code so as to accommodate the older browsers.</p>
   
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Work Cited</h3>

 <p>Caldwell, Alex. “When to Use Flexbox.” The Brolik Blog, 20 Apr. 2016, https://brolik.com/blog/when-to-use-flexbox</p>
 <p>A Complete Guide to Flexbox: CSS-Tricks.” CSS, https://css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>
 <p>Sharp, Remy. “What Is a Polyfill?” Remy Sharp's b:Log, https://remysharp.com/2010/10/08/what-is-a-polyfill/.</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include 'includes/footer.php'?>

