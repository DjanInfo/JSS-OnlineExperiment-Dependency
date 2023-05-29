<pre><code data-language="c">//#define CONTROL_WEIGHT
#define ORDER_DELIVERY_QUEUE
#define CONTROL_FRAGILE_PRODUCT

using namespace std;

struct Product {
	char productName[50];
	char purchaseDate[9];
	bool dispatched;
	#ifdef CONTROL_WEIGHT
	float weight;  
	#endif
	#ifdef CONTROL_FRAGILE_PRODUCT
	bool fragileProduct;
	#endif
} p[4] ={ {"Shower", "03/03/21", false, false},
          {"Glasses", "04/04/21", false, true},
          {"Lamp", "01/01/21", false, true},
          {"Cement", "02/02/21", false, false} };

#ifdef ORDER_DELIVERY_QUEUE
void orderDeliveryQueue() {
// This algorithm sorts the p product array considering the purchase date.
// At the end of the algorithm, the product with the oldest purchase date becomes the first element of the array
// and the product with the most recent purchase date becomes the last element of the array.
}
#endif

void dispatchedProduct() {
    #ifdef ORDER_DELIVERY_QUEUE
    orderDeliveryQueue();
    #endif
    #ifdef CONTROL_WEIGHT
    float limitWeightDelivery = 300;
    #endif 
    #ifdef CONTROL_FRAGILE_PRODUCT
    int fragileProductTotal = 0;
	#endif
    int i, n = 4;
    for ( i = 0; i < n; i ++ ) {
        if ( !p[i].dispatched ) {
            #ifdef CONTROL_FRAGILE_PRODUCT
            if ( !p[i].fragileProduct ) {
            #endif
                #ifdef CONTROL_WEIGHT
                if ( p[i].weight < limitWeightDelivery ) {
                #endif
                    printf( "\n Product name: %s", p[i].productName );
                    printf( "\n Product purchase date : %s", p[i].purchaseDate  );
                    #ifdef CONTROL_WEIGHT
                    printf("\n Weight: %.2f", p[i].weight);
                    #endif
                    #ifdef CONTROL_FRAGILE_PRODUCT
                    if ( !p[i].fragileProduct ) {		
                        printf("\n fragile product: No");
                    }
                    #endif
                    p[i].dispatched = true;
                    break;
                #ifdef CONTROL_WEIGHT
                } else 
                    printf("\n Overweight delivery product! The customer must come to pick the product!");
                #endif
            #ifdef CONTROL_FRAGILE_PRODUCT
            } else
                printf("\n Fragile product! The customer must come to pick the product!");
                fragileProductTotal++;
            #endif	
        }
        if ( i == n - 1 )
            printf("\n There are no products to be dispatched!!!");
    }
}

int main(){
	dispatchedProduct();
	return 0;
}</code></pre>
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
