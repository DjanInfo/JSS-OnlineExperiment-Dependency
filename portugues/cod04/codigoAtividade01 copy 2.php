<pre><code data-language="c">#define CONTROLE_ESTOQUE
#define ESTOQUE_MINIMO
#define CONTROLE_BONIFICACOES

using namespace std;

struct Produto {
	char nome[50];
	float valorVenda;
	#ifdef CONTROLE_ESTOQUE    
	int totalProdutosParaVenda;
	#ifdef ESTOQUE_MINIMO
	int estoqueMinimo;
	#endif
	#endif
	float valorCusto;	
};

int buscarProduto(Produto p[4]){
	char nome[40];
	int i;
	printf("\nInforme o nome do produto: \n");				
	gets(nome);	
	for ( i = 0 ; i < 4 ; i++ ){
		if ( strcmp(p[i].nome, nome) == 0 ){	
			return i;
		}
	}
	return -1;	
}
#ifdef CONTROLE_ESTOQUE
void reporEstoque(Produto p[4]){
	int codProduto = buscarProduto(p);
	if ( codProduto == -1 ){
		printf("\n Produto nao localizado!!!");
		return;
	}
	int totalAdquirido;
	printf ("Quantos produtos foram adquiridos? \n");
	scanf("%d", &totalAdquirido);
	#ifdef CONTROLE_BONIFICACOES
	if( totalAdquirido > 100 ){
		printf ("Voce ganhou mais 10 unidades de bonificacao \n");
		totalAdquirido += 10;
	}
	#endif
	p[codProduto].totalProdutosParaVenda += totalAdquirido;
	printf("Novo saldo do produto %d \n", p[codProduto].totalProdutosParaVenda);
	#ifdef ESTOQUE_MINIMO
	if ( p[codProduto].totalProdutosParaVenda < p[codProduto].estoqueMinimo )
		printf ("Estoque ainda esta abaixo no minimo \n");
	#endif
	printf ("\n\nPressione enter para continuar...");	
    getche ( );
}
#endif
void venderProduto(Produto p[4]) {
	int codProduto = buscarProduto(p);
	if ( codProduto == -1 ){
		printf("\n Produto nao localizado!!!");
		return;
	}
    int quantidade;
    printf("Informe a quantidade que sera vendida:");
    scanf("%d", &quantidade);
    #ifdef CONTROLE_BONIFICACOES
	if( quantidade > 10 ){
		printf ("Cliente ganhou 2 unidade de bonificacao \n");	
		quantidade += 2;
	}
	#endif
	#ifdef CONTROLE_ESTOQUE
    if ( p[codProduto].totalProdutosParaVenda - quantidade < 0 ) {
        printf("Quantidade insuficiente. Venda não realizada!");
    } else {
    p[codProduto].totalProdutosParaVenda -= quantidade;
    printf("Venda realizada!\n");
	#ifdef ESTOQUE_MINIMO
    if ( p[codProduto].totalProdutosParaVenda < p[codProduto].estoqueMinimo ) {
        puts("\nEstoque minimo atingindo! Reponha o produto...\n");
    }
	#endif
    }
	#endif
    printf("\nValor total dos produtos:");
	printf("%f \n", quantidade * p[codProduto].valorVenda);
    printf ("\n\nPressione enter para continuar...");
    getche ( );
}

void imprimirListaProdutos (Produto p[4]) {
    int i, n;
    n=4;
    for ( i = 0; i < n ; i++ ) {
    printf ("\n\nOrdem: %d ",i+1);
	printf ("\nNome: %s " , p[i].nome);
	printf ("\nValor de Venda: %.2f " , p[i].valorVenda);
	#ifdef CONTROLE_ESTOQUE
	printf ("\nTotal no estoque: %d " , p[i].totalProdutosParaVenda);
	#ifdef ESTOQUE_MINIMO
	printf ("\nEstoque minimo: %d " , p[i].estoqueMinimo);
	#endif
	#endif
	#ifdef CONTROLE_CUSTOS
	printf ("\nValor Custo: %.2f " , p[i].valorCusto);
	#endif
	}
	printf ("\n\nPressione enter para continuar...");
    getche ( );
}

int main(){
	struct Produto p[4];
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