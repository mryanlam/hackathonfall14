<?php
include "/hackathonfall14/includes/header.php";
?>

      <script language="javascript">         
         function checkBtn(id) {
               var form = document.createElement("form");
               form.setAttribute("method", "post");
               form.setAttribute("action", "classes.php");
               var field = document.createElement("input");
               field.setAttribute("type", "hidden");
               field.setAttribute("name", "choice");
               field.setAttribute("value", id);
               form.appendChild(field);
               document.body.appendChild(form);
               form.submit();
         }
      </script>

<classadd>
<!--Basically, forums just need to use post and you have to let Jeff know the name of the inputs -->
<!--This is a shitty mockup from Jeff, change it however you want -->
<div>
<p>
Click on a course to add it
</p>
<?php
include "/hackathonfall14/includes/addclassessc.php";
?>
</div>
</classadd>
</body>
</html>