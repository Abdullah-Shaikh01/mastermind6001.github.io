<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> POPCORN Sales  </title>
    
  </head>
  <body>
      <h2> Millennium Club POPCORN Sales - Bill</h2>
	  <h3>Customer:</h3>
      <table>
        <tbody><tr>
          <td> Name: <?php echo $_REQUEST["name"]; ?></td>
          <td></td>
        </tr>
        <tr>
          <td> Street: <?php echo $_REQUEST["street"]; ?></td>
          <td> </td>
	        </tr>
	        <tr>
	          <td> City: <?php echo $_REQUEST["city"]; ?></td>
	          <td> </td>
	        </tr>
	      </tbody></table>
	      <br>
	  <table border="border">
	
	<!-- First, the column headings -->
	
	        <tbody><tr>
	          <th> Product </th>
	          <th> Unit Price </th>
	          <th> Quantity Ordered</th>
			  <th> Item cost </th>
	        </tr>
	
	<!-- Now, the table data entries -->
	
	        <tr>
	          <td> Unpopped POPCORN (1 lb.) </td>
	          <td> $3.00 </td>
	          <td align="center"><?php echo $_REQUEST["unpop"]; ?> </td>
			  <td> $ <?php echo $_REQUEST["unpop"]*3.00; ?> </td>
	        </tr>
	        <tr>
	          <td> Caramel Popcorn (2 lb. canister) </td>
	          <td> $3.50 </td>
	          <td align="center"> <?php echo $_REQUEST["caramel"]*3.50; ?> </td>
			  <td>
			  			$7.00 
				</td>
	        </tr>
	        <tr>
	          <td> Caramel Nut POPCORN (2 lb. canister) </td>
	          <td> $4.50 </td>
	          <td align="center"> <?php echo $_REQUEST["caramelnut"]*4.50; ?> </td>
			  <td> $13.5</td>
	        </tr>
	        <tr>
	          <td> Toffey Nut POPCORN (2 lb. canister) </td>
			  <td> $5.00 </td>
          	  <td align="center">$ <?php echo $_REQUEST["toffeynut"]*5.00; ?> </td>
			  <td> $20.0</td>
        	</tr>
      </tbody></table>

<!-- The radio buttons for the payment method -->
	 
      <p>Your total is: <?php echo ($_REQUEST["toffeynut"]*5.00)+($_REQUEST["caramelnut"]*4.50)+($_REQUEST["caramel"]*3.50)+($_REQUEST["unpop"]*3.00); ?></p>
	  <p>Your chosen method of payment is: <?php echo $_REQUEST["payment"]; ?></p>
        
  

</body></html>