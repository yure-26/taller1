
	 public static void vect(int [] A){
		 int i, j, aux;
		 boolean llenar=true;
		 for(i=0;i<A.length-1 && llenar;i++)
		 {
		 llenar=false;
		 for(j=0;j<A.length-i-1;j++)
		 if(A[j+1]<A[j])
		 {
		 aux=A[j+1];
		 A[j+1]=A[j];
		 A[j]=aux;
		 llenar =true;
		    }
	    }
     }
  }
  <html>
    <head>
        </title>Taller 1 </title>
    </head>
    <body>
    <?php
        $varname = "yure";
        $varedad  = 20;
        $varb    = true;
        $varh    = 1.63;
        
    ?>
        <h1>
            <?php
                echo  $varname;
            ?>
        </h1>

        <h2>
            <?php
                echo $varedad;
            ?>
        </h2>

        <?php
        $posiciones=[
            "YURE",
            "PATRICIA",
            "RAMON",
            "PEDRO",
            "MARIA"
        ];

        $nombres = count($posiciones);
        echo "Mi vector tiene".$nombres;

        for ($i=0; $i < $nombres; $i++) 
        { 
            echo $posiciones[ $i];
        }
        ?>
    
    </body>
