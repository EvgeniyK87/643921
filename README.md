## Example Support API
======

`http://localhost/api/issues` - returns all issues

`http://localhost/api/issues/3` - returns specific issue 

Possible options for all issues
| **GET parameter**  | **Description**                                    
| ------------------ | ---------------------------------------------| 
| sort_by            | set column of sorting (see the table below) | 
| order_by           | set order of sorting, only asc|desc          |   
| filter[column_name]| set filter (see the table below)            |
| tags[]             | tag name                                     |


Possible sort_by and column_name:
| **sort_by**, **column_name** | **values type**        | 
| -----------------------------|:----------------------:| 
| id                           | integer                | 
| title                        | string (255)           |   
| category                     | string (255)           | 
| description                  | text (65KB)            |
| user_id                      | integer                | 
| created_at                   | date                   |
| updated_at                   | date                   |


For access use `Bearer token`
```
**hrLkzj4yaezrWTisIwoKnfI1kmXp28DDKsv3EKn3BHDfOyUKHnwPvp5Y6BwJ**
```
======

[![Run in Postman](https://run.pstmn.io/button.svg)](https://god.gw.postman.com/run-collection/20879151-be71563b-1df1-4aac-8e79-13c70ff486c7?action=collection%2Ffork&collection-url=entityId%3D20879151-be71563b-1df1-4aac-8e79-13c70ff486c7%26entityType%3Dcollection%26workspaceId%3D90684aef-822b-4f2a-90c4-6d995817a93e)
