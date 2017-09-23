/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(c/a))+String.fromCharCode(c%a+161)};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\[\xa1-\xff]+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp(e(c),'g'),k[c])}}return p}(';(£($,®){$.©[\'Ã\']=$.©[\'¸\'];$.Â($.©,{·:\'¹\',¸:£(x,t,b,c,d){¡ $.©[$.©.·](x,t,b,c,d)},Á:£(x,t,b,c,d){¡ c*(t/=d)*t+b},¹:£(x,t,b,c,d){¡-c*(t/=d)*(t-2)+b},À:£(x,t,b,c,d){¤((t/=d/2)<1)¡ c/2*t*t+b;¡-c/2*((--t)*(t-2)-1)+b},Å:£(x,t,b,c,d){¡ c*(t/=d)*t*t+b},Ç:£(x,t,b,c,d){¡ c*((t=t/d-1)*t*t+1)+b},Æ:£(x,t,b,c,d){¤((t/=d/2)<1)¡ c/2*t*t*t+b;¡ c/2*((t-=2)*t*t+2)+b},È:£(x,t,b,c,d){¡ c*(t/=d)*t*t*t+b},»:£(x,t,b,c,d){¡-c*((t=t/d-1)*t*t*t-1)+b},º:£(x,t,b,c,d){¤((t/=d/2)<1)¡ c/2*t*t*t*t+b;¡-c/2*((t-=2)*t*t*t-2)+b},¿:£(x,t,b,c,d){¡ c*(t/=d)*t*t*t*t+b},¼:£(x,t,b,c,d){¡ c*((t=t/d-1)*t*t*t*t+1)+b},½:£(x,t,b,c,d){¤((t/=d/2)<1)¡ c/2*t*t*t*t*t+b;¡ c/2*((t-=2)*t*t*t*t+2)+b},¾:£(x,t,b,c,d){¡-c*¢.µ(t/d*(¢.¦/2))+c+b},Ä:£(x,t,b,c,d){¡ c*¢.­(t/d*(¢.¦/2))+b},Û:£(x,t,b,c,d){¡-c/2*(¢.µ(¢.¦*t/d)-1)+b},Ö:£(x,t,b,c,d){¡(t==0)?b:c*¢.§(2,¨*(t/d-1))+b},Õ:£(x,t,b,c,d){¡(t==d)?b+c:c*(-¢.§(2,-¨*t/d)+1)+b},Ô:£(x,t,b,c,d){¤(t==0)¡ b;¤(t==d)¡ b+c;¤((t/=d/2)<1)¡ c/2*¢.§(2,¨*(t-1))+b;¡ c/2*(-¢.§(2,-¨*--t)+2)+b},×:£(x,t,b,c,d){¡-c*(¢.°(1-(t/=d)*t)-1)+b},Ø:£(x,t,b,c,d){¡ c*¢.°(1-(t=t/d-1)*t)+b},Ú:£(x,t,b,c,d){¤((t/=d/2)<1)¡-c/2*(¢.°(1-t*t)-1)+b;¡ c/2*(¢.°(1-(t-=2)*t)+1)+b},Ù:£(x,t,b,c,d){¥ s=1.«;¥ p=0;¥ a=c;¤(t==0)¡ b;¤((t/=d)==1)¡ b+c;¤(!p)p=d*.3;¤(a<¢.³(c)){a=c;¥ s=p/4}¬ ¥ s=p/(2*¢.¦)*¢.²(c/a);¡-(a*¢.§(2,¨*(t-=1))*¢.­((t*d-s)*(2*¢.¦)/p))+b},Ó:£(x,t,b,c,d){¥ s=1.«;¥ p=0;¥ a=c;¤(t==0)¡ b;¤((t/=d)==1)¡ b+c;¤(!p)p=d*.3;¤(a<¢.³(c)){a=c;¥ s=p/4}¬ ¥ s=p/(2*¢.¦)*¢.²(c/a);¡ a*¢.§(2,-¨*t)*¢.­((t*d-s)*(2*¢.¦)/p)+c+b},É:£(x,t,b,c,d){¥ s=1.«;¥ p=0;¥ a=c;¤(t==0)¡ b;¤((t/=d/2)==2)¡ b+c;¤(!p)p=d*(.3*1.5);¤(a<¢.³(c)){a=c;¥ s=p/4}¬ ¥ s=p/(2*¢.¦)*¢.²(c/a);¤(t<1)¡-.5*(a*¢.§(2,¨*(t-=1))*¢.­((t*d-s)*(2*¢.¦)/p))+b;¡ a*¢.§(2,-¨*(t-=1))*¢.­((t*d-s)*(2*¢.¦)/p)*.5+c+b},Ì:£(x,t,b,c,d,s){¤(s==®)s=1.«;¡ c*(t/=d)*t*((s+1)*t-s)+b},Ë:£(x,t,b,c,d,s){¤(s==®)s=1.«;¡ c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},Ê:£(x,t,b,c,d,s){¤(s==®)s=1.«;¤((t/=d/2)<1)¡ c/2*(t*t*(((s*=(1.´))+1)*t-s))+b;¡ c/2*((t-=2)*t*(((s*=(1.´))+1)*t+s)+2)+b},¶:£(x,t,b,c,d){¡ c-$.©.±(x,d-t,0,c,d)+b},±:£(x,t,b,c,d){¤((t/=d)<(1/2.ª)){¡ c*(7.¯*t*t)+b}¬ ¤(t<(2/2.ª)){¡ c*(7.¯*(t-=(1.5/2.ª))*t+.ª)+b}¬ ¤(t<(2.5/2.ª)){¡ c*(7.¯*(t-=(2.Í/2.ª))*t+.Î)+b}¬{¡ c*(7.¯*(t-=(2.Ñ/2.ª))*t+.Ð)+b}},Ï:£(x,t,b,c,d){¤(t<d/2)¡ $.©.¶(x,t*2,0,c,d)*.5+b;¡ $.©.±(x,t*2-d,0,c,d)*.5+c*.5+b}})})(Ò);',59,59,'return|Math|function|if|var|PI|pow|10|easing|75|70158|else|sin|undefined|5625|sqrt|easeOutBounce|asin|abs|525|cos|easeInBounce|def|swing|easeOutQuad|easeInOutQuart|easeOutQuart|easeOutQuint|easeInOutQuint|easeInSine|easeInQuint|easeInOutQuad|easeInQuad|extend|jswing|easeOutSine|easeInCubic|easeInOutCubic|easeOutCubic|easeInQuart|easeInOutElastic|easeInOutBack|easeOutBack|easeInBack|25|9375|easeInOutBounce|984375|625|jQuery|easeOutElastic|easeInOutExpo|easeOutExpo|easeInExpo|easeInCirc|easeOutCirc|easeInElastic|easeInOutCirc|easeInOutSine'.split('|'),0,{}))

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
