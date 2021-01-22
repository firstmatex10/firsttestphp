
    <?php include_once("navbar.php") ?>

    <h1 style="text-align : center;">About US</h1>
    <p style="color:red;">
    2.7.1 The Elements “ruby,” “rt,” and “rp”
The term ruby refers to a typographic annotation system, meaning “short runs of
text alongside the base text, typically used in East Asian documents to indicate
pronunciation or to provide a short annotation” (www.w3.org/TR/ruby). Ruby
annotation is used in Chinese and Japanese to show the pronunciation of characters, as you can see in the example on the left in Figure 2.7.
Figure 2.7  Two examples of ruby annotation
The markup for ruby annotations contains the elements ruby, rt, and rp. First,
the expression that will be explained is specified within a ruby element. The explanation is then provided by the following rt element, and in browsers with
ruby support the content of this rt element is positioned above the expression
described. As you can see in the Beijing example, several words in a row can be
annotated this way.
Browsers without ruby support (such as Firefox and Opera) display the individual
components consecutively, which can make the words more difficult to read. Because it is not necessarily clear that the second word is the explanation of the first
word, a visual separation of the two components is required. That is what the rp
element is for: It enables adding optional parentheses that will only be displayed
if a browser does not know ruby. As you can see in Figure 2.7, Google Chrome can
    </p>

    <?php include_once("footerCopyrights.php") ?>
