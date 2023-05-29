<pre><code data-language="c">#define CONTROLE_SEGUNDA_DOSE
#define CONTROLE_VENCIMENTO
//#define CONTROLE_TEMPERATURA

using namespace std;

struct Vacina {
	char marcaDaVacina[50];
	int totalVacinasDisponiveis;
	#ifdef CONTROLE_SEGUNDA_DOSE
	int totalNecessarioParaSegundaDose;
	#endif
	#ifdef CONTROLE_VENCIMENTO
	char vencimento[9];
	#endif
	#ifdef CONTROLE_TEMPERATURA
	int temperaturaArmazenamento;
	#endif
} v[4] ={ { "Janssen", 400, 200, "12/12/22 "},
          { "Coronavac", 100, 100, "12/12/22 "},
          { "Astrazeneca", 200, 100, "01/01/21 "},
          { "Pfizer", 300, 200, "01/01/21 "} };

#ifdef CONTROLE_TEMPERATURA
void ordenarFilaTemperatura() {
//Algoritmo de ordenação do vetor v de Vacinas considerando a temperatura de armazenamento.
//Ao final do algoritmo a vacina com temperatura de armazenamento menor será o primeiro elemento do vetor
//e a vacina com termperatura maior o último elemento. 
}
#endif

#ifdef CONTROLE_VENCIMENTO
bool verificarVencimento(char vencimento[9]) {
// Função compara data de vencimento da vacina com data atual e
// retorna true se a vacina estiver vencida e false caso não esteja.
}
#endif

void LiberarLoteVacinacao() {
    #ifdef CONTROLE_TEMPERATURA
    ordenarFilaTemperatura();
    #endif	
    int i, n = 4, totalGeralVacinasParaUso = 0;
    for ( i = 0; i < n; i ++ ) {
        #ifdef CONTROLE_VENCIMENTO
        if ( !verificarVencimento( v[i].vencimento ) ) {
        #endif
            #ifdef CONTROLE_SEGUNDA_DOSE
            if ( v[i].totalVacinasDisponiveis > v[i].totalNecessarioParaSegundaDose ) {
            #endif
                printf ( "\n Marca da vacina: %s " , v[i].marcaDaVacina );
                #ifdef CONTROLE_SEGUNDA_DOSE
                v[i].totalVacinasDisponiveis = v[i].totalVacinasDisponiveis - v[i].totalNecessarioParaSegundaDose;
                #endif
                totalGeralVacinasParaUso += v[i].totalVacinasDisponiveis;
                v[i].totalVacinasDisponiveis = 0;
                #ifdef CONTROLE_SEGUNDA_DOSE
                v[i].totalVacinasDisponiveis = v[i].totalNecessarioParaSegundaDose;
                printf ( "\n Total de vacinas Disponiveis: %d " , v[i].totalVacinasDisponiveis );
                printf ( "\n Total necessário para segunda dose: %d doses" , v[i].totalNecessarioParaSegundaDose );
                #endif
            #ifdef CONTROLE_SEGUNDA_DOSE
            } else 
                printf( "\n Total de vacinas em estoque inferior ao necessario para aplicar segunda dose." );
            #endif
        #ifdef CONTROLE_VENCIMENTO
        } else
            printf( "\n Vacina vencida. Não será liberada." );
        #endif
    }
	printf ( "\n Total de vacinas liberadas para vacinação: %d" , totalGeralVacinasParaUso );
}

int main(){
	LiberarLoteVacinacao();
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