<?php
/**
 * Created by PhpStorm.
 * User: defense
 * Date: 15/09/17
 * Time: 12:16
 */


class Modelo extends CI_Model{
    public function consultaDadoEmpresaProduto($empresa, $ano,$sexo,$modalidade,$divisaoX){
        $this->load->database("default");

        

        switch ($modalidade) {
            case 'seguradosINV_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,produto from " .$empresa . $ano . ".at_inv GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and produto='$divisaoX'");
                break;
            case 'seguradosSOB_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,produto from " .$empresa . $ano . ".at_SOB GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and produto='$divisaoX'");
                break;
            case 'seguradosMOR_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,produto from " .$empresa . $ano . ".at_mor GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and produto='$divisaoX'");
                break;
            case 'seguradosINV_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,produto from " .$empresa . $ano . ".sa_inv GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and produto='$divisaoX'");
                break;
            case 'seguradosSOB_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,produto from " .$empresa . $ano . ".sa_SOB GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and produto='$divisaoX'");
                break;
            case 'seguradosMOR_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,produto from " .$empresa . $ano . ".sa_mor GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and produto='$divisaoX'");
                break;
            case 'exposicaoINV':

                break;
            case 'exposicaoSOB':

                break;
            case 'exposicaoMOR':

                break;
            case 'obitosINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where mot_saida!='900' and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'obitosSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_sob where mot_saida!='900' and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'obitosMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where mot_saida!='900' and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'registrosINV_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".At_inv where sexo = '$sexo' and produto='$divisaoX'");
                break;

            case 'registrosSOB_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".At_SOB where sexo = '$sexo' and produto='$divisaoX'");
                break;

            case 'registrosMOR_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".At_mor where sexo = '$sexo' and produto='$divisaoX'");
                break;

            case 'registrosINV_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where sexo = '$sexo' and produto='$divisaoX'");
                break;

            case 'registrosSOB_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_SOB where sexo = '$sexo' and produto='$divisaoX'");
                break;

            case 'registrosMOR_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where sexo = '$sexo' and produto='$divisaoX'");
                break;

            case 'estoqueInicialINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where data_ingr<$ano"."01 and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'estoqueInicialSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where data_ingr<$ano"."01 and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'estoqueInicialMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where data_ingr<$ano"."01 and sexp='$sexo' and produto='$divisaoX'");
                break;

            case 'estoqueFinalINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where data_ingr=999999 and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'estoqueFinalMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where data_ingr=999999 and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'estoqueFinalSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where data_ingr=999999 and sexo='$sexo' and produto='$divisaoX'");
                break;

            case 'cpfInvalidoINV_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and produto='$divisaoX'"); 
                break;

            case 'cpfInvalidoMOR_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and produto='$divisaoX'"); 
                break;

            case 'cpfInvalidoSOB_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and produto='$divisaoX'"); 
                break;
            case 'cpfInvalidoINV_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'and produto='$divisaoX'"); 
                break;

            case 'cpfInvalidoMOR_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and produto='$divisaoX'"); 
                break;

            case 'cpfInvalidoSOB_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_sob where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and produto='$divisaoX'"); 
                break;

            default:
                # code...
                break;
        }
        $q =  $this->db->query($modalidade);
       
        $exe = array();

        foreach ($q->result() as $row) {
            $exe["emp"] = $empresa;
            $exe["ano"] = $ano;
            $exe["dados"] = $row->QTD;
            //$exe["sexo"] = $row->sexo; 
            #$result[] = $exe;
        }
        return $exe;
        console_log($exe);
    }

    public function consultaDadoEmpresaCobertura($empresa, $ano,$sexo,$modalidade,$divisaoX){
        $this->load->database("default");


        switch ($modalidade) {
            case 'seguradosINV_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,cobertura from " .$empresa . $ano . ".at_inv GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and cobertura='$divisaoX'");
                break;
            case 'seguradosSOB_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,cobertura from " .$empresa . $ano . ".at_SOB GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and cobertura='$divisaoX'");
                break;
            case 'seguradosMOR_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,cobertura from " .$empresa . $ano . ".at_mor GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and cobertura='$divisaoX'");
                break;
            case 'seguradosINV_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,cobertura from " .$empresa . $ano . ".sa_inv GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and cobertura='$divisaoX'");
                break;
            case 'seguradosSOB_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,cobertura from " .$empresa . $ano . ".sa_SOB GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and cobertura='$divisaoX'");
                break;
            case 'seguradosMOR_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF,cobertura from " .$empresa . $ano . ".sa_mor GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo' and cobertura='$divisaoX'");
                break;
            case 'exposicaoINV':

                break;
            case 'exposicaoSOB':

                break;
            case 'exposicaoMOR':

                break;
            case 'obitosINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where mot_saida!='900' and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'obitosSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_sob where mot_saida!='900' and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'obitosMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where mot_saida!='900' and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'registrosINV_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".At_inv where sexo = '$sexo' and cobertura='$divisaoX'");
                break;

            case 'registrosSOB_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".At_SOB where sexo = '$sexo' and cobertura='$divisaoX'");
                break;

            case 'registrosMOR_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".At_mor where sexo = '$sexo' and cobertura='$divisaoX'");
                break;

            case 'registrosINV_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where sexo = '$sexo' and cobertura='$divisaoX'");
                break;

            case 'registrosSOB_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_SOB where sexo = '$sexo' and cobertura='$divisaoX'");
                break;

            case 'registrosMOR_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where sexo = '$sexo' and cobertura='$divisaoX'");
                break;

            case 'estoqueInicialINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where data_ingr<$ano"."01 and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'estoqueInicialSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where data_ingr<$ano"."01 and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'estoqueInicialMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where data_ingr<$ano"."01 and sexp='$sexo' and cobertura='$divisaoX'");
                break;

            case 'estoqueFinalINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where data_ingr=999999 and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'estoqueFinalMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where data_ingr=999999 and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'estoqueFinalSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where data_ingr=999999 and sexo='$sexo' and cobertura='$divisaoX'");
                break;

            case 'cpfInvalidoINV_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and cobertura='$divisaoX'"); 
                break;

            case 'cpfInvalidoMOR_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and cobertura='$divisaoX'"); 
                break;

            case 'cpfInvalidoSOB_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and cobertura='$divisaoX'"); 
                break;
            case 'cpfInvalidoINV_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'and cobertura='$divisaoX'"); 
                break;

            case 'cpfInvalidoMOR_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and cobertura='$divisaoX'"); 
                break;

            case 'cpfInvalidoSOB_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_sob where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo' and cobertura='$divisaoX'"); 
                break;

            default:
                # code...
                break;
        }
        $q =  $this->db->query($modalidade);
       
        $exe = array();

        foreach ($q->result() as $row) {
            $exe["emp"] = $empresa;
            $exe["ano"] = $ano;
            $exe["dados"] = $row->QTD;
            //$exe["sexo"] = $row->sexo; 
            #$result[] = $exe;
        }
        return $exe;
        console_log($exe);
    }
    

    public function consultaDadoEmpresa($empresa, $ano,$sexo,$modalidade){
        $this->load->database("default");
        
        switch ($modalidade) {
            case 'seguradosINV_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF from " .$empresa . $ano . ".at_inv GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo'");
                break;
            case 'seguradosSOB_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF from " .$empresa . $ano . ".at_SOB GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo'");
                break;
            case 'seguradosMOR_ativo':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF from " .$empresa . $ano . ".at_mor GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo'");
                break;
            case 'seguradosINV_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF from " .$empresa . $ano . ".sa_inv GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo'");
                break;
            case 'seguradosSOB_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF from " .$empresa . $ano . ".sa_SOB GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo'");
                break;
            case 'seguradosMOR_saida':
                $modalidade = ("select count(*) as QTD from (SELECT SEXO,DATA_NASC,CPF from " .$empresa . $ano . ".sa_mor GROUP BY SEXO, DATA_NASC,CPF ) where sexo='$sexo'");
                break;
            case 'exposicaoINV':

                break;
            case 'exposicaoSOB':

                break;
            case 'exposicaoMOR':

                break;
            case 'obitosINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where mot_saida!='900' and sexo='$sexo'");
                break;

            case 'obitosSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_sob where mot_saida!='900' and sexo='$sexo'");
                break;

            case 'obitosMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where mot_saida!='900' and sexo='$sexo'");
                break;

            case 'registrosINV_ativo':
                $modalidade = ("select count(*) as QTD from" . $empresa . $ano . ".At_inv where sexo = '$sexo'");
                break;

            case 'registrosSOB_ativo':
                $modalidade = ("select count(*) as QTD from" . $empresa . $ano . ".At_SOB where sexo = '$sexo'");
                break;

            case 'registrosMOR_ativo':
                $modalidade = ("select count(*) as QTD from" . $empresa . $ano . ".At_mor where sexo = '$sexo'");
                break;

            case 'registrosINV_saida':
                $modalidade = ("select count(*) as QTD from" . $empresa . $ano . ".sa_inv where sexo = '$sexo'");
                break;

            case 'registrosSOB_saida':
                $modalidade = ("select count(*) as QTD from" . $empresa . $ano . ".sa_SOB where sexo = '$sexo'");
                break;

            case 'registrosMOR_saida':
                $modalidade = ("select count(*) as QTD from" . $empresa . $ano . ".sa_mor where sexo = '$sexo'");
                break;

            case 'estoqueInicialINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where data_ingr<$ano"."01 and sexo='$sexo'");
                break;

            case 'estoqueInicialSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where data_ingr<$ano"."01 and sexo='$sexo'");
                break;

            case 'estoqueInicialMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where data_ingr<$ano"."01 and sexo='$sexo'");
                break;

            case 'estoqueFinalINV':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where data_ingr=999999 and sexo='$sexo'");
                break;

            case 'estoqueFinalMOR':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where data_ingr=999999 and sexo='$sexo'");
                break;

            case 'estoqueFinalSOB':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where data_ingr=999999 and sexo='$sexo'");
                break;

            case 'cpfInvalidoINV_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_inv where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'"); 
                break;

            case 'cpfInvalidoMOR_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_mor where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'"); 
                break;

            case 'cpfInvalidoSOB_ativo':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".at_sob where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'"); 
                break;
            case 'cpfInvalidoINV_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_inv where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'"); 
                break;

            case 'cpfInvalidoMOR_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_mor where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'"); 
                break;

            case 'cpfInvalidoSOB_saida':
                $modalidade = ("select count(*) as QTD from " . $empresa . $ano . ".sa_sob where Tabuas.checa_cpf(cpf)='0' and sexo='$sexo'"); 
                break;
            default:
                # code...
                break;
        }

        $q =  $this->db->query($modalidade);
       
        $exe = array();

        foreach ($q->result() as $row) {
            $exe["emp"] = $empresa;
            $exe["ano"] = $ano;
            $exe["dados"] = $row->QTD;
            //$exe["sexo"] = $row->sexo; 
            #$result[] = $exe;
        }
        return $exe;
        console_log($exe);
    }

}