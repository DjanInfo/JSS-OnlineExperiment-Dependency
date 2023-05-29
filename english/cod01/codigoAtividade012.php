<pre><code data-language="c">//#define CONTROL_AGE
//#define CONTROL_PREGNANT
//#define ORDER_QUEUE

using namespace std;

struct Patient {
	char name[40];	
	#ifdef CONTROL_AGE
	int age;
	#endif
	char gender;
	#ifdef CONTROL_PREGNANT
	bool pregnant;
	#endif
	bool vaccinated;
}p[4] = {{"Alice", false},
         {"Maria", false},
         {"Jessica", false},
         {"Vivian", false}};

#ifdef CONTROL_AGE
const int vaccinateAgeLimit = 40;
#endif

#ifdef ORDER_QUEUE
void orderQueue() {
//This algorithm sorts the patients array according to age
//at the end of the algorithm, the oldest patient becomes the first element of the array 
//and the youngest patient the last
}
#endif

void vaccinate() {
    #ifdef ORDER_QUEUE
    orderQueue();
    #endif	
    int i, n = 4;
    for ( i = 0; i < n; i ++ ) {
        if ( !p[i].vaccinated ) {
            #ifdef CONTROL_AGE
            if ( p[i].age > vaccinateAgeLimit ) {
            #endif
                #ifdef CONTROL_PREGNANT
                if ( !p[i].pregnant ) {
                #endif
                    printf("patient's name: %s \n", p[i].name);
                    #ifdef CONTROL_AGE
                    printf("Age: %d \n", p[i].age);
                    #endif
                    printf("Gender: %c \n", p[i].gender);
                    #ifdef CONTROL_PREGNANT
                    if ( tolower(p[i].gender) == 'f' && p[i].pregnant )		
                        printf("Pregnant: Yes\n");
                    #endif
                    p[i].vaccinated = true;
                    break;
                #ifdef CONTROL_PREGNANT
                } else
                    printf("Pregnant pacients cannot be vaccinated!\n");
                #endif	
            #ifdef CONTROL_AGE
            } else
                printf("Insufficient age to vaccinate: %d \n", p[i].name);
            #endif
        }
    }
}

int main(){
	// Consider the array p filled as in the task statement.
	vaccinate();
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