<?php


$pageTitle = "Gate Motor Discussion Forum";
$metaTitle = "";
$metaDescription = "A collection of questions and answers about gate automation with links to everything you could need.All major brands of gate motors in South Africa are catered for.";
$metaKeywords = "gate motor question,gate automation question,electric gate discussion";



  include __DIR__."/../include/header.php";
  include __DIR__."/../include/forumLib/forumTopics.php";
  include __DIR__."/../include/articles/ArticleList.php";
  /*
   * This is the main forum page www.gatemotorguru.co.za/forum(/)
   */
?>

<h1>Gate Motor Discussion Forum</h1>

<h2>List of Discussion Topics</h2>
<br/>
<?php
    //showForumTopicList();
    //showFirstPostForm("","","","");
    showArticleList();
?>
<br/>

If you have question that you don't see listed here, feel free to send it to <b>gatemotorguru@gmail.com</b>.
We will ask our experts and post the solutions.

<br/>
<br/>
<br/>

<?php
  include __DIR__."/../include/footer.php";
?>