<html>
<head>
    <title>Selecao</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script src="<?=base_url()?>static/js/selecao.js"></script>



</head>
<body>
    <div class="container-fluid">
        <form action="reuniao/recebe" method="POST">
            <div class="container">
                <h1>Selecione as empresas desejadas</h1>
                <input type="checkbox" name="empresas[]" value="ABR"/> ABR <br/> 
                <input type="checkbox" name="empresas[]" value="BBR"/> BBR <br/> 
                <input type="checkbox" name="empresas[]" value="BRA"/> BRA <br/> 
                <input type="checkbox" name="empresas[]" value="ITA"/> ITA <br/> 
            </div>
        <div class="container">
            <h1>Selecione os anos desejados</h1>  
            <input type="checkbox" name="anos[]" value="2004"/> 2004 <br/> 
            <input type="checkbox" name="anos[]" value="2005"/> 2005 <br/> 
            <input type="checkbox" name="anos[]" value="2006"/> 2006 <br/> 
            <input type="checkbox" name="anos[]" value="2007"/> 2007 <br/> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Invalidez</h2>
                    <form action="" method="POST">
                    <input type="radio" name="modalidade" value="seguradosINV_ativo"> Segurados Ativos <br/> 
                    <input type="radio" name="modalidade" value="seguradosINV_saida"> Segurados Saida <br/> 
                    <input type="radio" name="modalidade" value="exposicaoINV"> Exposicao <br/> 
                    <input type="radio" name="modalidade" value="obitosINV"> Obitos <br/> 
                    <input type="radio" name="modalidade" value="registrosINV_ativo"> Registros Ativos <br/> 
                    <input type="radio" name="modalidade" value="registrosINV_saida"> Registros Saida <br/> 
                    <input type="radio" name="modalidade" value="estoqueInicialINV"> Estoque Inicial <br/>
                    <input type="radio" name="modalidade" value="estoqueFinalINV"> Estoque Final <br/>
                    <input type="radio" name="modalidade" value="cpfInvalidoINV_ativo"> CPF invalidos Ativos <br/>
                    <input type="radio" name="modalidade" value="cpfInvalidoINV_saida"> CPF invalidos Saida <br/>

                    </div>

                    

                <div class="col-md-4">
                    <h2>Sobrevivencia</h2>
                    <input type="radio" name="modalidade" value="seguradosSOB_ativo"> Segurados Ativos <br/> 
                    <input type="radio" name="modalidade" value="seguradosSOB_saida"> Segurados Saida <br/> 
                    <input type="radio" name="modalidade" value="exposicaoSOB"> Exposicao <br/> 
                    <input type="radio" name="modalidade" value="obitosSOB"> Obitos <br/> 
                    <input type="radio" name="modalidade" value="registosSOB_ativo"> Registros Ativos <br/> 
                    <input type="radio" name="modalidade" value="registosSOB_saida"> Registros Saida <br/> 
                    <input type="radio" name="modalidade" value="estoqueInicialSOB"> Estoque Inicial <br/>
                    <input type="radio" name="modalidade" value="estoqueFinaSOB"> Estoque Final <br/> 
                    <input type="radio" name="modalidade" value="cpfInvalidoSOB_ativo"> CPF invalidos Ativos <br/> 
                    <input type="radio" name="modalidade" value="cpfInvalidoSOB_saida"> CPF invalidos Saida <br/> 
                </div>
                <div class="col-md-4">
                    <h2>Mortalidade</h2>
                    <input type="radio" name="modalidade" value="seguradosMOR_ativo"> Segurados Ativos <br/> 
                    <input type="radio" name="modalidade" value="seguradosMOR_saida"> Segurados Saida <br/>
                    <input type="radio" name="modalidade" value="exposicaoMOR"> Exposicao <br/> 
                    <input type="radio" name="modalidade" value="obitosMOR"> Obitos <br/> 
                    <input type="radio" name="modalidade" value="registrosMOR_ativo"> Registros Ativos <br/> 
                    <input type="radio" name="modalidade" value="registrosMOR_saida"> Registros Saida <br/> 
                    <input type="radio" name="modalidade" value="estoqueInicialMOR"> Estoque Inicial <br/>
                    <input type="radio" name="modalidade" value="estoqueFinalMOR"> Estoque Final <br/>
                    <input type="radio" name="modalidade" value="cpfInvalidoMOR_ativo"> CPF invalidos Ativos <br/> 
                    <input type="radio" name="modalidade" value="cpfInvalidoMOR_saida"> CPF invalidos Saida <br/>

                    

                </div>
                
            </div>
        </div>
        
        <div>

            <h2>Cobertura Invalidez</h2>
                    <input type="checkbox" class="check check_invalidez" data-priority="1" data-priority2="1"  name="divisaoX[]" value="1">Cobertura de invalidez por acidente somente <br/>
                    <input type="checkbox" class="check check_invalidez" data-priority="2" data-priority2="2" name="divisaoX[]" value="2">Cobertura de invalidez por doença somente <br/>
                    <input type="checkbox" class="check check_invalidez" data-priority="3" data-priority2="3" name="divisaoX[]" value="3">Cobertura de invalidez por qualquer causa <br/>

            
            <h2>Cobertura Morte</h2>
                    <input type="checkbox" class="check check_morte" data-priority="4" data-priority2="2" name="divisaoX[]" value="1"> cobertura de morte por qualquer causa <br/> 
                    <input type="checkbox" class="check check_morte" data-priority="5" data-priority2="2" name="divisaoX[]"  value="2"> cobertura de morte por qualquer causa com indenização adicional por acidente <br/> 
            <h2>Sexo</h2>
        	<input type="checkbox" class="check check_sexo"   data-priority="1" name="divisaoX[]" value="sexo"> Sexo <br/> 
        	<h2>Produtos</h2>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]"  value="PT"> PT <br/>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]" value="PBL"> PBL <br/>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]" value="FGB"> FGB <br/>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]"  value="VGL"> VGL <br/>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]"  value="VGA"> VGA <br/>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]"  value="VGB"> VGB <br/>
                <input type="checkbox" class="check check_produto" data-priority="1" name="divisaoX[]"  value="VGC"> VGC <br/>
        </div>

            <input type="submit" value="OK"/>
        

        </form>
        </div>
        
</body>
</html>