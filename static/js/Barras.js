$.ajax({
    url: '/reuniao/reuniao/dados',
    dataType: 'JSON',
    success: function(resultado){
        renderizaGrafico(resultado);
    }
});

function renderizaGrafico(tudao){
    console.log(tudao)
    var teste = {

        chart: {
            type: 'column'
        },
        title: {
            text: 'Gráfico de barras 2D'
        },
        xAxis: {
            categories: tudao.categories
        },
        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Populacao'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal'
            }
        },
        series: tudao.dados
    };
        Highcharts.chart('grafico_reuniao',teste);
    console.log(teste)

    
}

function processaDados(dados){
    // var datas = {
    //     data : [categories:[],
    //             data:[],
    //             ano:[]
            
    // };

    // for(i=0;i<10;i++){
    //     datas.data[i] = {   categories : [data.categories.push(dados[i].emp)],
    //                         data : [data.data.push(parseInt(dados[i].dados))],
    //                         ano : data.ano.push(dados[i].ano) };
    // }
    data = {
        categories: [],
        data : {data:[]},
        ano : []
    }
    for(i =  0 ; i < dados.length ; i++){

        data.categories.push(dados[i].emp)
        data.data.data.push(parseInt(dados[i].dados))
        data.ano.push(dados[i].ano)
    }
    
    return data
//     console.log("cheguei em dados");
//     var series = [];
//     $.each(dados, function(index, valor, sexo){
//         var serie = {
//             name: index,
//             data: [parseFloat(valor[0].QTD)],
//             stack: sexo
//         };
//         series.push(serie);
//     });
//     console.log(series);
//     return series;
// }
}
