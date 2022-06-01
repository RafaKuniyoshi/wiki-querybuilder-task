# wiki-querybuilder-task

I'm assuming that the running PHP version is greater than 7.4.0.
I created a class called UserEdit, which is responsible for the changes that users have made. 
In this class, we have a function responsible to create a query that will return the next five rows, based on the where conditions.
I'm not considering that the variables can be empty, because the WHERE command was in the first function, and not in the buildWhereCondition.