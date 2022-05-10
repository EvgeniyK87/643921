Example Support API

For access use Bearer token - hrLkzj4yaezrWTisIwoKnfI1kmXp28DDKsv3EKn3BHDfOyUKHnwPvp5Y6BwJ 

http://localhost/api/issues - returns all issues
http://localhost/api/issues/3 - returns specific issue from 1 to 30 

Possible opnions for all issues:
sort_by - set column of sorting [id,title,category,description,user_id,created_at,updated_at]
order_by- set order of sorting [asc,desc]
filter[column_name] - set column_name and value that caontains in field [id,title,category,description,user_id,created_at,updated_at]
tags[] - set tags of filtering issues

Run POSTMAN collection 

<div class="postman-run-button"
data-postman-action="collection/fork"
data-postman-var-1="20879151-766066e4-7f97-4c15-b215-20d29faaa4aa"
data-postman-collection-url="entityId=20879151-766066e4-7f97-4c15-b215-20d29faaa4aa&entityType=collection&workspaceId=90684aef-822b-4f2a-90c4-6d995817a93e"></div>
<script type="text/javascript">
  (function (p,o,s,t,m,a,n) {
    !p[s] && (p[s] = function () { (p[t] || (p[t] = [])).push(arguments); });
    !o.getElementById(s+t) && o.getElementsByTagName("head")[0].appendChild((
      (n = o.createElement("script")),
      (n.id = s+t), (n.async = 1), (n.src = m), n
    ));
  }(window, document, "_pm", "PostmanRunObject", "https://run.pstmn.io/button.js"));
</script>
