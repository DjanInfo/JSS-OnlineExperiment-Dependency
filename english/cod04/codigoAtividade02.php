<pre><code data-language="c">#define CONTROL_EXPIRATION
#define CONTROL_STORE
#define CONTROL_RETURN

using namespace std;

struct Product {
	char productName[50];
	int numberOfProduct;
	#ifdef CONTROL_EXPIRATION
	char expiry_date[9];
	#endif
	#ifdef CONTROL_STORE    
	bool adulterated;
	#endif
	#ifdef CONTROL_RETURN  
	bool can_return;
	#endif
};

#ifdef CONTROL_EXPIRATION
bool checkExpiration ( char expiry_date[9] ) {
// This function compares vaccine expiration date with current date and
// returns true if the product is expired and false if not.
}

void orderByExpiration ( Product p[4] )  {
// This algorithm sorts the p product array considering the expiration date.
// At the end of the algorithm, the product with the earliest expiration date will be the first element of the array
// and the product with the most distant expiration date will be the last element.
}
#endif

void discardProduct( Product p[4] ) {
    #ifdef CONTROL_EXPIRATION
    orderByExpiration ();
    #endif	
    int i, n = 4;
	int numberOfDiscardedProducts = 0;
	int numberOfReturnedProducts = 0;
    for ( i = 0; i < n; i ++ ) {
        printf ( "\n Product name: %s " , p[i].productName );
        printf ( "\n Number of product: %d " , p[i].numberOfProduct );
        #ifdef CONTROL_STORE
        if ( p[i].adulterated ) {
        #endif
            numberOfDiscardedProducts += p[i].numberOfProduct;
            #ifdef CONTROL_EXPIRATION
            if ( checkExpiration( p[i].expiry_date ) ) {
            #endif
                #ifdef CONTROL_RETURN
                if ( p[i].can_return ) {
                    numberOfReturnedProducts += p[i].numberOfProduct;
                    numberOfDiscardedProducts -= p[i].numberOfProduct;
                    printf ( "\n Product returned" );
                } else 
                #endif
                    printf ( "\n Product discarded" );
            #ifdef CONTROL_EXPIRATION
            }
            #endif
        #ifdef CONTROL_STORE
	    }
        #endif
	}
	printf ( "\n Number of Discarded Products: %d " , numberOfDiscardedProducts);
	printf ( "\n Number of returned products: %d " , numberOfReturnedProducts);
}

int main(){

Product p[4] = { {"Drug A", 50, "01/01/21", false, true},
           {"Drug C", 150, "03/03/22", true, true},
           {"Drug B", 100, "02/02/21", true, false},		
           {"Drug D", 200, "04/04/22", false, false} };

	discardProduct ( p );
	return 0;
}</code></pre>
<script src="../css/rainbow/js/rainbow.js"></script>
<script src="../css/rainbow/js/rainbow.linenumbers.js"></script>
<script src="../css/rainbow/js/language/generic.js"></script>
<script src="../css/rainbow/js/language/javascript.js"></script>
<pre>&nbsp;
</pre>
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
