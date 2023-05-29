<pre><code data-language="c">#define CONTROLE_PESO
#define ORDENAR_FILA_ENTREGAS
#define CONTROLE_FRAGILIDADE

using namespace std;

struct Produto {
	char nome[50];
	char dataCompra[9];
	bool despachado;
	#ifdef CONTROLE_PESO
	float peso;  
	#endif
	#ifdef CONTROLE_FRAGILIDADE
	bool produtoFragil;
	#endif
} p[4] ={ { "Chuveiro", "03/03/21", false, 2, false },
          { "Vidros", "04/04/21", false, 35, true },
          { "Lampada", "01/01/21", false, 1, true },
          { "Cimento", "02/02/21", false, 50, false } };

#ifdef CONTROLE_PESO
const float limitePesoEntrega = 30;
#endif 

#ifdef ORDENAR_FILA_ENTREGAS
void ordenarFilaEntregas() {
//Algoritmo de ordenação do vetor p de Produtos considerando a data da compra.
//Ao final do algoritmo o produto com data da compra mais antigo passa a ser o primeiro elemento do vetor
//e o produto com data da compra mais recente passa a ser o último elemento do vetor.
}
#endif

void despacharProdutos() {
    #ifdef ORDENAR_FILA_ENTREGAS
    ordenarFilaEntregas();
    #endif
    int i, n = 4;
    for ( i = 0; i < n; i ++ ) {
        if ( !p[i].despachado ) {
            #ifdef CONTROLE_FRAGILIDADE
            if ( !p[i].produtoFragil ) {
            #endif
                #ifdef CONTROLE_PESO
                if ( p[i].peso < limitePesoEntrega ) {
                #endif
                    printf( "\n Nome do produto: %s", p[i].nome );
                    #ifdef CONTROLE_PESO
                    printf( "\n Peso: %.2f", p[i].peso );
                    #endif
                    #ifdef CONTROLE_FRAGILIDADE
                    if ( !p[i].produtoFragil ) {		
                        printf( "\n Frágil: Não" );
                    }
                    #endif
                    p[i].despachado = true;
                    break;
                #ifdef CONTROLE_PESO
                } else 
                    printf( "\n Produto acima do peso de entrega!!! Deverá ser retirado pelo cliente!" );
                #endif
            #ifdef CONTROLE_FRAGILIDADE
            } else
                printf( "\n Produto frágil! Deverá ser retirado pelo cliente!" );
            #endif	
        }
        if ( i == n - 1 )
            printf( "\n Não há produto para ser despachado!" );
    }
}

int main(){
	despacharProdutos();
	return 0;
}</code></pre>
		<script src="../css/rainbow/js/rainbow.js"></script>
		<script src="../css/rainbow/js/rainbow.linenumbers.js"></script>
		<script src="../css/rainbow/js/language/generic.js"></script>
		<script src="../css/rainbow/js/language/javascript.js"></script>
		<script>
			(function(oXHR){
				if (XMLHttpRequest!==undefined) {
					oXHR = new XMLHttpRequest();
					oXHR.addEventListener('readystatechange',handleReadyStateChange);
					oXHR.open('GET','css/rainbow/js/rainbow.linenumbers.js',true);
					oXHR.send();
				}
				function handleReadyStateChange(){
					if (oXHR.readyState===4) {
						if (oXHR.status!==200&&oXHR.status!==304) {
							errorCallback('HTTP error ' + oXHR.status); // todo: check error stati and flow
						} else {
//							console.log('oXHR.result',oXHR.response); // log
							//<pre><code data-language="javascript" data-line="1223">
							var mPre = document.createElement('pre')
								,mCode = document.createElement('code')
							;
							mCode.textContent = oXHR.response;
							mCode.classList.add('rainbow');
							mCode.classList.add('xhr');
							mPre.appendChild(mCode);
							document.body.appendChild(mPre);
							setTimeout(function(){
								Rainbow.color(parseLTGT(oXHR.response),'javascript',function(code){
									mCode.innerHTML = code;
									window.Rainbow.linenumbers(mCode);
								});
							},111);
						}
					}
				}
				function parseLTGT(s) {
					return s.replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/[\r]/g,'');
				}
			})();
		</script>