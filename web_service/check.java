package com;


	import java.sql.*;
	public class newclass {
		 final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
		   final String DB_URL = "jdbc:mysql://127.0.0.1:3306/project";

		   //  Database credentials
		   final String USER = "root";
		   final String PASS = "phpadmin";
		  public void createProduct(int marketingSiteID,int productID, String productName) 
		   {
			   Connection conn = null;
			   Statement stmt = null;
			   try{
			      //STEP 2: Register JDBC driver
			      Class.forName("com.mysql.jdbc.Driver");
		
			      //STEP 3: Open a connection
			      System.out.println("Connecting to database...");
			      conn = DriverManager.getConnection(DB_URL,USER,PASS);
		
			      //STEP 4: Execute a query
			      System.out.println("Creating statement...");
			      stmt = conn.createStatement();
			      String sql = "INSERT INTO marketing_site_product (marketingSiteId, productId,productName) VALUES ("+marketingSiteID+","+productID+","+"\'"+productName+"\' )";
			      stmt.executeUpdate(sql);
			      System.out.println("Inserting records into database...");
			      //STEP 6: Clean-up environment
			      stmt.close();
			      conn.close();
			   }catch(SQLException se){
			      //Handle errors for JDBC
			      se.printStackTrace();
			   }catch(Exception e){
			      //Handle errors for Class.forName
			      e.printStackTrace();
			   }finally{
			      //finally block used to close resources
			      try{
			         if(stmt!=null)
			            stmt.close();
			      }catch(SQLException se2){
			      }// nothing we can do
			      try{
			         if(conn!=null)
			            conn.close();
			      }catch(SQLException se){
			         se.printStackTrace();
			      }//end finally try
			   }//end try
			   System.out.println("Goodbye!");
		   }
		 
	}

	
	

