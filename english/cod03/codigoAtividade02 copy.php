<pre><code data-language="c">//#define CONTROLE_PESO
//#define ORDENAR_FILA_ENTREGAS
//#define CONTROLE_FRAGILIDADE

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
}produto[4];

#ifdef CONTROLE_PESO
const float limite_peso_entrega = 300;
#endif 

#ifdef ORDENAR_FILA_ENTREGAS
int ordenarEntregas(){
//algoritmo de ordenação do vetor de Produtos considerando a data do faturamento
//ao final do algoritmo o produto com data de compra mais antigo passa a ser o primeiro elemento do vetor
//e o produto faturado mais recente passa a ser o último 
}
#endif

void despacharProdutos(Produto produto[4]) {
	#ifdef ORDENAR_FILA_ENTREGAS
	ordenarEntregas();
	#endif
	int i, n=4;
	for ( i = 0; i < n; i++ ){
		if( produto[i].despachado == false ){
			#ifdef CONTROLE_FRAGILIDADE
			if( produto[i].produtoFragil == false ){
			#endif
				#ifdef CONTROLE_PESO
				if ( produto[i].peso < limite_peso_entrega ){
				#endif
	printf("*** Produto: %s \n", produto[i].nome);
	#ifdef CONTROLE_PESO
	printf("Peso: %.2f \n", produto[i].peso);
	#endif
	#ifdef CONTROLE_FRAGILIDADE
	if ( !produto[i].produtoFragil ) {		
		printf("Fragil: Nao\n");
	}
	#endif
	produto[i].despachado = true;
	break;
				#ifdef CONTROLE_PESO
				} else {
				printf("Produto acima do peso de entrega!!! Deverá ser despachado pelo cliente!\n Despachando proximo da fila\n\n");
				}
				#endif
			#ifdef CONTROLE_FRAGILIDADE
			} else {
				printf("Produto fragil!!! Devera ser despachado pelo cliente!\n Despachando proximo da fila\n\n");
			}
			#endif	
		}
	if( i == n-1 ){
		printf("Nao ha produto para ser despachado!!!");		
	} 
	}
}

void imprimirEtiqueta(Produto produto[4]) {
    int i, n;
    n=4;
    for ( i = 0; i < n ; i++ ) {
		printf("\n*** Produto: %s \n", produto[i].nome);
		#ifdef CONTROLE_VEICULOS
		printf("Peso: %.2f \n", produto[i].peso);
		#endif
		#ifdef CONTROLE_FRAGILIDADE
		if ( !produto[i].produtoFragil )		
			printf("Fragil: Nao\n");
		else
			printf("Fragil: Sim\n");
		#endif
	}
	printf ("\n\nPressione enter para continuar...");
    getche ( );
}
void imprimirDespachados(){
    int i, n=4;
    for ( i = 0; i < n ; i++ ) {
        printf ("\n\nOrdem: %d ",i+1);
		printf ("\nNome: %s " , produto[i].nome);
		printf ("%s" , produto[i].dataCompra);
		 if (produto[i].despachado == true)
			printf("\nDespachado: Sim");
		 else
			printf("\nDespachado: Nao");
	}
	printf("\n\nPressione enter para continuar...");
    getche ( );
}

int main(){

	int opcao;
	do {
		system("CLS");
		printf("Escolha uma opcao: \n\n");
		printf("1 - Cadastrar produtos \n");
		#ifdef ORDENAR_FILA_ENTREGAS
		printf("2 - Ordenar entregas \n");
		#endif
		printf("3 - Despachar produtos\n");
		printf("4 - Imprimir etiqueta\n");
		printf("5 - Imprimir despachados\n");
		printf("0 - Sair\n");
		scanf("%d", &opcao);
		fflush(stdin);		
		system("CLS");
		switch(opcao){
			case 0: 
				printf("Saindo...\n");
			break;
			case 1: 
				printf("CADASTRAR PRODUTOS\n\n");
				// CONSIDERE OS SEGUINTES CADASTROS:
				//p[0] -  nome: Vidros, dataCompra = 12/06/21 , despachado = false, peso = 350, produtoFragil = true
				//p[1] -  nome: Cimento, dataCompra = 30/05/21 , despachado = false, peso = 50, produtoFragil = false
				//p[2] -  nome: Chuveiro, dataCompra = 01/05/21 , despachado = false, peso = 2, produtoFragil = false
				//p[3] -  nome: Banheira, dataCompra = 20/05/21 , despachado = false, peso = 500, produtoFragil = false
			break;
			#ifdef ORDENAR_FILA_ENTREGAS
			case 2: 
				printf("ORDENAR FILA DE ENTREGAS\n\n");
				ordenarEntregas();
				printf("\n\n\nPressione enter para continuar...");
				getchar();
			break;
			#endif
			case 3: 
				printf("DESPACHAR PRODUTOS\n\n");
				despacharProdutos(produto);
				printf("\n\n\nPressione enter para continuar...");
				getchar();
			break;
			case 4:
				printf("IMPRIMIR LISTA DE PRODUTOS \n\n");
				imprimirEtiqueta(produto);
			break;
			case 5:
				printf("IMPRIMIR LISTA DE DESPACHADOS \n\n");
				imprimirDespachados();
			default: 
				printf("Opcao invalida\n");
		}
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