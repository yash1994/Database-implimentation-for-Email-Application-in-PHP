# Database-implimentation-for-Email-Application-in-PHP
This is based on the implementation of database on email application in which a database is created based on the information provided by the user of email system and provided an interface between user and database system by the means of front end.<br />
For the implementation of such definition we have first created the database schema based on the requirements of our database which defines the basic structure of the database and tells something about data model definitions.
According to our data needs we have divided our database into five relations, the relations and their attribute are create as per shown below.<br />
1)	User: (User_id, Password)<br /> 
2)	Name: (First_name, Middle_name,  Last_name, User_id)<br />
3)	Address: (Address, city, state, country, pin_code, User_id)<br />
4)	Personal: (date_of_birth, age, gender, User_id)<br />
5)	Contacts: (Mobile_no, Landline_no, User_id)<br />
6)	Services: (Google+, Google_drive, User_id)<br />
