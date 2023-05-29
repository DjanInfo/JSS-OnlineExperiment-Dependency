<pre><code data-language="c">#define CONTROLE_SEGUNDA_DOSE
#define ESTOQUE_MINIMO
#define CONTROLE_VENCIMENTO

using namespace std;

struct Vacina {
	char tipoDaVacina[50];
	int totalVacinas;
	#ifdef ESTOQUE_MINIMO
	int totalVacinasParaSegundaDose;
	#endif
	#ifdef CONTROLE_VENCIMENTO
	char vencimento[9];
	#endif	
};

#ifdef CONTROLE_VENCIMENTO
int buscarVencimento(Vacina v[4]){
//..
//algoritmo de busca no vetor de Vacianas considerando a data de vencimento
//ao final do algoritmo a função retorna o indice da vacina com data de vencimento mais próxima 
}
#endif

int buscarVacina(Vacina v[4]){
//... 
//algoritmo de busca no vetor de Vacianas considerando o tipo da vacina
//ao final do algoritmo a função retorna o indice da vacina de acordo com o tipo 
}

void addLoteVacinacao(Vacina v[4]) {
	char resposta;
	int codVacina = buscarVacina(v);
	if ( codVacina == -1 ){
		printf("\n Lote de vacina nao localizada!!!");
		return;
	}
	#ifdef CONTROLE_VENCIMENTO
	int vacinaVencimentoProximo = buscarVencimento(v);
	if ( codVacina != vacinaVencimentoProximo ){
		printf("\nA Vacina %s tem data de vencimento mais proxima!", v[vacinaVencimentoProximo].tipoDaVacina);
		printf("\nDeseja utiliza-la? s ou n \n");
		scanf("%c", &resposta);
		fflush(stdin);	
		if ( resposta == 's' )
			codVacina = vacinaVencimentoProximo;
	}
	#endif	
    int quantidade1dose, quantidade2dose;
	#ifdef CONTROLE_SEGUNDA_DOSE
	if ( v[codVacina].totalVacinasParaSegundaDose > v[codVacina].totalVacinas ){
		printf("\nTotal de vacinas em estoque inferior ao necessario pra segunda dose. So pode vacinar segunda dose.\n");
		quantidade1dose = 0;
	} else {
	#endif
    printf("Informe a quantidade que foi utilizada para primeira dose:");
    scanf("%d", &quantidade1dose);
	#ifdef CONTROLE_SEGUNDA_DOSE		
	}
	#endif
    printf("Informe a quantidade que foi utilizada para segunda dose:");
    scanf("%d", &quantidade2dose);
    if( v[codVacina].totalVacinas - quantidade1dose - quantidade2dose < 0 ){
    	printf("\nQuantidade superior ao estoque, operacao nao realizada");
    	getche ( );
		return;	
	} 
    v[codVacina].totalVacinas -= quantidade1dose;
	#ifdef ESTOQUE_MINIMO
    v[codVacina].totalVacinasParaSegundaDose += quantidade1dose;
	#endif
    v[codVacina].totalVacinas -= quantidade2dose;
	#ifdef ESTOQUE_MINIMO
    v[codVacina].totalVacinasParaSegundaDose -= quantidade2dose;
    if ( v[codVacina].totalVacinas < v[codVacina].totalVacinasParaSegundaDose ) {
    	printf("%d", v[codVacina].totalVacinas	);
        printf("\nEstoque minimo atingindo! Reponha ...\n");
    }
	#endif
    printf ("\n\nPressione enter para continuar...");
    getche ( );
}

void imprimirListagem (Vacina v[4]) {
    int i, n=4;
    for ( i = 0; i < n ; i++ ){
    printf ("\n\nOrdem: %d ",i+1);
	printf ("\nTipo da vacina: %s " , v[i].tipoDaVacina);
	printf ("\nTotal de vacinas: %d doses" , v[i].totalVacinas);
	#ifdef ESTOQUE_MINIMO
	printf ("\nEstoque minimo para segunda dose: %d doses" , v[i].totalVacinasParaSegundaDose);
	#endif
	#ifdef CONTROLE_VENCIMENTO
	printf ("\nPrazo de vencimento: %s " , v[i].vencimento);
	#endif
	}
	printf ("\n\nPressione enter para continuar...");
    getche ( );
}

#ifdef ESTOQUE_MINIMO
void imprimirSoma (Vacina v[4]) {
    int i, n=4, total_de_doses = 0, total_necessario_2dose = 0;
    for ( i = 0; i < n ; i++ ) {
		total_de_doses += v[i].totalVacinas;
		total_necessario_2dose += v[i].totalVacinasParaSegundaDose;
	}
	printf ("\nEm estoque: %d doses \n Necessario para segunda dose: %d doses" , total_de_doses, total_necessario_2dose);
    getche ( );
}
#endif
int main(){
	struct Vacina v[4];
	int opcao;
	opcao = menu();
	// função menu ocultada neste código
	// a função retorna a opção do usuário para as funções do sistema
	switch(opcao){
	//algorito ocultado neste código
	// de acordo com a opção escolhida pelo usuário será invocada a função correspondente	
	} while(opcao != 0);
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