<!-- Login form -->
<form id="loginInfoForm" method="post">
   Admin Host: <input type="text" value="localhost" name="AdminHost" /><br>
   TM1 Server: <input type="text" value="Planning Sample" name="TM1Server" /><br>
   User Name: <input type="text" value="admin" name="Username" /><br>
   Password: <input type="password" value="apple" name="Password" /><br>
   <input type="button" value="Submit" onclick="loadCubeview();" />
</form>

<!-- The iframe to host and display the TM1 Web object -->
<iframe id="cubeviewId" name="cubeviewIFrame" style="width:100%; height:100%;"></iframe>

<script type="text/javascript">

   // This function submits the login form and opens a CubeViewer
   function loadCubeview() {

      // Get a reference to the login form
      var loginForm = document.getElementById("loginInfoForm");

      var baseUrl = "http://analytics.rodobens.net:9300/bi/v1/tm1web/UrlApi.jsp";

      var params = "#Action=Open&Type=CubeViewer&Cube=plan_BudgetPlan";
      params = params  + "&View=Budget Input Detailed&AccessType=Public";

      // Assign the URL to the action property of the login form
      loginForm.action = baseUrl + params;

      // NOTE: Be sure to use the iframe name for the target of the login form
      loginForm.target = "cubeviewIFrame";

      // Submit the form to login and display the TM1 Web object
      loginForm.submit();
   };
</script>