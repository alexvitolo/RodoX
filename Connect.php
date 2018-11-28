// Class connect netezza

<?php 

    //Use the machine name and instance if multiple instances are used
    $server = 'RODSRR01HMPD02';
    $user = 'avitolo';
    $pass = 'Pizza123123';
    //Define Port
    $port='Port=5480';
    $database = 'DATALAKE_HML';

    $connection_string = "DRIVER={NetezzaSQL};SERVER=$server;$port;DATABASE=$database";
    $conn = odbc_connect($connection_string,$user,$pass);
    if ($conn) {
        echo "Connection established.";
    } else{
        die("Connection could not be established.");
    }

    $sql = "SELECT * FROM st3_200 WHERE identifier = 1";

    $result = odbc_exec($conn,$sql);
    // Get Data From Result
      while ($data[] = odbc_fetch_array($result));

      // Free Result
      odbc_free_result($result);

      // Close Connection
      odbc_close($conn);

      // Show data
      print_r($data);



$connectionstring = odbc_connect("RODSRR01HMPD02", "avitolo", "Pizza123123"); 
$Query = "SELECT PK_ODS_COLABORADOR
               , PK_ODS_REVENDA
               , SEQ_BUP
               , NOM_SISTEMA_ORIGEM
               , DTH_VENDA
               , COD_FILIAL
               , NUM_NOTA
               , DES_SERIE
               , DTH_EMISSAO
               , COD_BP_CLIENTE
               , COD_CANAL_COMUNICACAO
               , COD_CNPJ_FILIAL
               , COD_CPF_VENDEDOR
               , COD_ID_NOTA
               , COD_ID_OS
               , DES_CANAL_COMUNICACAO
               , DES_HORA_EMISSAO
               , DES_NATUREZA
               , DES_OPERACAO
               , DES_TIPO_NOTA_FISCAL
               , NOM_CLIENTE
               , NOM_EMPRESA_VENDEDOR
               , NOM_FILIAL
               , NOM_VENDEDOR
               , NUM_DOC_CLIENTE
               , NUM_OS
               , QTD_NA_NF
               , QTD_PARCELAS
               , STA_CORTESIA
               , STA_GARANTIA
               , STA_NOTA
               , STA_OPERACAO
               , STA_OS
               , STA_OS_INTERNA
               , COD_UNIDADE_NEGOCIO
               , NUM_DOC_SAP
               , PERC_LUCRO_MEDIO
               , QTD_PECAS
               , VLR_ACRESCIMO
               , VLR_COFINS
               , VLR_CUSTO_CTM
               , VLR_CUSTO_MEDIO
               , VLR_CUSTO_OPERACAO
               , VLR_DESCONTO_ITEM
               , VLR_FRETE
               , VLR_ICMS
               , VLR_ICMS_DIFAL
               , VLR_ICMS_PARTILHA_UF_DEST
               , VLR_ICMS_PARTILHA_UF_REMET
               , VLR_LUCRO
               , VLR_MARGEM
               , VLR_PECAS
               , VLR_PIS
               , VLR_PRECO_LIQUIDO_NF
               , VLR_PRECO_NF
               , VLR_TABELA
               , VLR_VENDA
               , VLR_DESCONTO_CAPA_PROPORCIONAL
               , VLR_DESCONTO_CAPA

           FROM DATALAKE_HML.ODS.V_ODS_POSVENDA_VENDAS_PRODUTOS_NOTAS
          LIMIT 100; "; 
$queryexe = odbc_do($connectionstring, $Query); 

print_r($queryexe);exit;


//disconnect from database 

odbc_close($connectionstring); 
?>

//RODSRR01HMPD02

//jdbc:netezza://RODSRR01PD00.rodobens.net:5480/DATALAKE

//jdbc:netezza://RODSRR01HM00.rodobens.net:5480/DATALAKE