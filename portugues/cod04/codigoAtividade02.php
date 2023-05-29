<pre><code data-language="c">#define CONTROLE_VENCIMENTO
#define CONTROLE_ARMAZENAMENTO
#define CONTROLE_DEVOLUCAO

using namespace std;

struct Produto {
	char nome[50];
	int quantidade;
	#ifdef CONTROLE_VENCIMENTO
	char vencimento[9];
	#endif
	#ifdef CONTROLE_ARMAZENAMENTO    
	bool adulterado;
	#endif
	#ifdef CONTROLE_DEVOLUCAO  
	bool podeDevolver;
	#endif
} p[4] = { { "Remédio A", 50, "01/01/21",  false, true },
           { "Remédio B", 100, "03/03/22",  true, true },
           { "Remédio C", 150, "02/02/21", true, false },
           { "Remédio D", 200, "04/04/22", false, false } };

#ifdef CONTROLE_VENCIMENTO
bool verificarVencimento(char vencimento[9]) {
// Função compara data de vencimento da vacina com data atual e
// retorna true se o produto estiver vencido e false caso não esteja.
}

void ordenarFilaVencimento() {
//Algoritmo de ordenação no vetor p de produtos considerando a data de vencimento.
//Ao final do algoritmo o produto com data vencimento mais antigo será o primeiro elemento do vetor
//e o produto com data vencimento mais distante será o último elemento. 
}
#endif

void descartarProdutos() {
    #ifdef CONTROLE_VENCIMENTO
    ordenarFilaVencimento();
    #endif	
    int i, n = 4, totalProdutosDescartados = 0, totalProdutosDevolvidos = 0;
    for ( i = 0; i < n; i ++ ) {
        printf ( "\n Produto: %s " , p[i].nome );
        printf ( "\n Quantidade: %d " , p[i].quantidade );
        #ifdef CONTROLE_ARMAZENAMENTO
        if ( p[i].adulterado ) {
        #endif
            totalProdutosDescartados += p[i].quantidade;
            #ifdef CONTROLE_VENCIMENTO
            if ( verificarVencimento( p[i].vencimento ) ) {
            #endif
                #ifdef CONTROLE_DEVOLUCAO
                if ( p[i].podeDevolver ) {
                    totalProdutosDevolvidos += p[i].quantidade;
                    totalProdutosDescartados -= p[i].quantidade;
                    printf (" \n Produto devolvido ");
                } else 
                #endif
                    printf (" \n Produto descartado ");
            #ifdef CONTROLE_VENCIMENTO
            }
            #endif
        #ifdef CONTROLE_ARMAZENAMENTO
	    }
        #endif
	}
	printf ( "\n Total de produtos descartados: %d " , totalProdutosDescartados );
	printf ( "\n Total de produtos devolvidos: %d " , totalProdutosDevolvidos );
}

int main(){
	descartarProdutos();
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