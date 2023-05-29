<pre><code data-language="c">//#define CONTROLE_IDADE
//#define CONTROLE_GESTANTE
//#define ORGANIZAR_FILA

using namespace std;

struct Paciente {
	char nome[40];	
	#ifdef CONTROLE_IDADE
	int idade;
	#endif
	char sexo;
	#ifdef CONTROLE_GESTANTE
	bool gestante;
	#endif
	bool vacinado;
} p[4];

#ifdef CONTROLE_IDADE
const int limiteIdadeVacinar = 40;
#endif

#ifdef ORGANIZAR_FILA
void organizarFila() {
//algoritmo de ordenação do vetor de Pacientes considerando a idade
//ao final do algoritmo o paciente mais velho passa a ser o primeiro elemento do vetor
//e o paciente mais novo o último 
}
#endif

void vacinar() {
	#ifdef ORGANIZAR_FILA
	organizarFila();
	#endif	
	int i, n = 4;
    for ( i = 0; i < n; i ++ ) {
		if ( !p[i].vacinado ) {
			#ifdef CONTROLE_IDADE
			if ( p[i].idade > limiteIdadeVacinar ) {
			#endif
				#ifdef CONTROLE_GESTANTE
				if ( !p[i].gestante ) {
				#endif
					printf("Nome do paciente: %s \n", p[i].nome);
					#ifdef CONTROLE_IDADE
					printf("Idade: %d \n", p[i].idade);
					#endif
					printf("Sexo: %c \n", p[i].sexo);
					#ifdef CONTROLE_GESTANTE
					if ( tolower(p[i].sexo) == 'f' && p[i].gestante )		
						printf("Gestante: Sim\n");
					#endif
					p[i].vacinado = true;
					break;
				#ifdef CONTROLE_GESTANTE
				} else
					printf("Não pode vacinar gestantes!!\n");
				#endif	
			#ifdef CONTROLE_IDADE
			} else
				printf("Idade insuficiente do paciente: %d \n", p[i].nome);
			#endif
		}
		if ( i == n - 1 )
			printf("Não há pessoas para serem vacinadas!");		 
	}
}

void totalizarVacinados() {
    int i, n = 4, totalVacinados = 0;
    #ifdef CONTROLE_GESTANTE
    int totalGestanteNaoVacinado = 0;
    #endif
    for ( i = 0; i < n ; i ++ ) {
		 if ( p[i].vacinado )
		 	totalVacinados ++;
		 #ifdef CONTROLE_GESTANTE
		 if ( tolower(p[i].sexo) == 'f' && p[i].gestante )
		 	totalGestanteNaoVacinado ++;
		 #endif
	}
	printf("\n Total vacinados %d \n", totalVacinados);
    #ifdef CONTROLE_GESTANTE
    printf("\n Total de gestantes não vacinadas %d \n", totalGestanteNaoVacinado);
	#endif
}

int main(){
	// Considere o vetor p preenchido como no enunciado.
	vacinar();
	totalizarVacinados();
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