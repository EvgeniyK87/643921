Example Support API

For access use Bearer token - hrLkzj4yaezrWTisIwoKnfI1kmXp28DDKsv3EKn3BHDfOyUKHnwPvp5Y6BwJ 

http://localhost/api/issues - returns all issues
http://localhost/api/issues/3 - returns specific issue from 1 to 30 

Possible opnions for all issues:
sort_by - set column of sorting [id,title,category,description,user_id,created_at,updated_at]
order_by- set order of sorting [asc,desc]
filter[column_name] - set column_name and value that caontains in field [id,title,category,description,user_id,created_at,updated_at]
tags[] - set tags of filtering issues

[![Run in Postman](https://run.pstmn.io/button.svg)](https://god.gw.postman.com/run-collection/20879151-766066e4-7f97-4c15-b215-20d29faaa4aa?action=collection%2Ffork&collection-url=entityId%3D20879151-766066e4-7f97-4c15-b215-20d29faaa4aa%26entityType%3Dcollection%26workspaceId%3D90684aef-822b-4f2a-90c4-6d995817a93e)
