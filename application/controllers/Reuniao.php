<?php
class Reuniao extends CI_Controller {

    public function index()
    {
        $this->load->helper("url");
        $this->load->view("Selecao");
    }

    public function recebe(){
        $this->load->helper('url');

        $empresas = $_POST['empresas'];
        $anos = $_POST['anos'];
        $modalidade = $_POST['modalidade'];
        $divisaoXs = $_POST['divisaoX'];

        $this->load->model("Modelo", "modelo");

        $series = array();
        $produto = array('PT','PBL','FGB','VGL','VGA','VGB',"VGC");
        $categoria = array('1','2','3');


        if (in_array($divisaoXs[0],$produto)){
            foreach ($divisaoXs as $divisaoX) {
                foreach ($empresas as $empresa){
                    $serie = new stdClass();
                    $serie->name = $empresa.'- M -'.$divisaoX;
                    $serie->data = array();
                    $serie->stack = $empresa.$divisaoX.'M';
                    $serie->sexo = 'Masculino';

                    foreach ($anos as $ano ) {
                        $contagem = $this->modelo->consultaDadoEmpresaProduto($empresa,$ano,'M',$modalidade,$divisaoX);
                        $serie->data[] = intval ($contagem["dados"]);
                    };
                    $series[] = $serie;
                    print_r($series);
                };
            
                foreach ($empresas as $empresa){
                    $serie = new stdClass();
                    $serie->name = $empresa.'- F -'.$divisaoX;
                    $serie->data = array();
                    $serie->stack = $empresa.$divisaoX.'F';
                    $serie->sexo = 'Feminino';

                    foreach ($anos as $ano ) {
                        $contagem = $this->modelo->consultaDadoEmpresaProduto($empresa,$ano,'F',$modalidade,$divisaoX);
                        $serie->data[] = intval ($contagem["dados"]);
                    };
                    $series[] = $serie;
                    print_r($series);   
                };
            };
        } elseif ('sexo'==$divisaoXs[0]){
            foreach ($empresas as $empresa){
                $serie = new stdClass();
                $serie->name = $empresa.'- M';
                $serie->data = array();
                $serie->stack = $empresa.'M';
                $serie->sexo = 'Masculino';

                foreach ($anos as $ano ) {
                    $contagem = $this->modelo->consultaDadoEmpresa($empresa,$ano,'M',$modalidade);
                    $serie->data[] = intval ($contagem["dados"]);
                };
                $series[] = $serie;
                print_r($series);
            };

            foreach ($empresas as $empresa){
                $serie = new stdClass();
                $serie->name = $empresa.'- F';
                $serie->data = array();
                $serie->stack = $empresa.'F';
                $serie->sexo = 'Feminino';

                foreach ($anos as $ano ) {
                    $contagem = $this->modelo->consultaDadoEmpresa($empresa,$ano,'F',$modalidade);
                    $serie->data[] = intval ($contagem["dados"]);
                };
                $series[] = $serie;
                print_r($series);
            };
        } elseif (in_array($divisaoXs[0],$categoria)){
            foreach ($divisaoXs as $divisaoX) {
                foreach ($empresas as $empresa){
                    $serie = new stdClass();
                    $serie->name = $empresa.'- M -'.$divisaoX;
                    $serie->data = array();
                    $serie->stack = $empresa.$divisaoX.'M';
                    $serie->sexo = 'Masculino';

                    foreach ($anos as $ano ) {
                        $contagem = $this->modelo->consultaDadoEmpresaCobertura($empresa,$ano,'M',$modalidade,$divisaoX);
                        $serie->data[] = intval ($contagem["dados"]);
                    };
                    $series[] = $serie;
                    print_r($series);
                };
            
                foreach ($empresas as $empresa){
                    $serie = new stdClass();
                    $serie->name = $empresa.'- F -'.$divisaoX;
                    $serie->data = array();
                    $serie->stack = $empresa.$divisaoX.'F';
                    $serie->sexo = 'Feminino';

                    foreach ($anos as $ano ) {
                        $contagem = $this->modelo->consultaDadoEmpresaCobertura($empresa,$ano,'F',$modalidade,$divisaoX);
                        $serie->data[] = intval ($contagem["dados"]);
                    };
                    $series[] = $serie;
                    print_r($series);   
                };
            };
        }

        

        $tudao = new stdClass();
        $tudao->categories = $anos;
        $tudao->dados = $series;
        
        session_start();
        $_SESSION['series'] = $tudao;

        redirect("reuniao/grafico");
    }

    public function dados(){
        session_start();
        $contagem = $_SESSION['series'];

        echo json_encode($contagem);
    }

    public function grafico(){
        $this->load->view("Grafico");
    }
}