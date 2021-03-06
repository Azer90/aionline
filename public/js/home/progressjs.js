;(function(window){function Progress(target,{size=10,val=0,precision=0,getVal=()=>{},drag=true,direction='horizontal',tip=false}={}){if(!target)return alert('必须指定实例对象的容器！')
this.container=document.querySelector(target)
this.size=size
this.val=val
this.precision=precision
this.getVal=getVal
this.drag=drag
this.direction=direction
if(typeof tip==='object'){this.tip=tip||{trigger:'show',align:'top'}}else if(typeof tip!='boolean'){return alert('tip配置错误')}
this.initialize()}
Progress.prototype={constructor:Progress,initialize:function(){if(this.size<0||this.val<0||this.val>100||this.precision<0||this.precision>4||(this.direction!='horizontal'&&this.direction!='vertical')||!this.container||(typeof this.drag!='boolean'&&typeof this.drag!='object'))
return alert('参数配置错误！')
this.rander()
this.renderLine()},rander:function(){this.bgBar=document.createElement('div')
this.bgLine=document.createElement('div')
this.btnTip=document.createElement('div')
const{bgBar,container,bgLine,btnTip}=this
switch(this.direction){case 'horizontal':bgBar.classList.add('ProgressBar')
bgBar.style.height=this.size+'px'
bgBar.style.width=100+'%'
bgBar.style.borderRadius=this.size/2+'px'
bgLine.appendChild(btnTip)
break
case 'vertical':bgBar.classList.add('ProgressBar')
bgBar.style.width=this.size+'px'
bgBar.style.height=100+'%'
bgBar.style.borderRadius=this.size/2+'px'
btnTip.classList.add('vertical')
bgLine.appendChild(btnTip)
break}
btnTip.classList.add('btn')
btnTip.style.width=this.size+'px'
btnTip.style.height=this.size+'px'
bgLine.classList.add('ProgressLine')
bgLine.style.borderRadius=this.size/2+'px'
bgBar.appendChild(bgLine)
container.appendChild(bgBar)
if(this.drag){this.Dragdrop()}else{this.btnTip.classList.add('disable')}
if(this.tip||typeof this.tip==='object')this.openTip()
this.onLoading()},Dragdrop:function(){const bgBar=this.bgBar
const mothes=e=>{this.getPos(e)}
bgBar.addEventListener('mousedown',e=>{document.addEventListener('mousemove',mothes)
this.getPos(e)})
document.addEventListener('mouseup',e=>{document.removeEventListener('mousemove',mothes)})
bgBar.addEventListener('touchstart',e=>{document.addEventListener('touchmove',mothes)
this.getPos(e)})
document.addEventListener('touchend',e=>{document.removeEventListener('touchmove',mothes)})},getPos:function(event){if(typeof event.touches==='undefined'){event.preventDefault()
event.stopPropagation()}
if(event.touches)event=event.touches[0]
this.oldVal=this.val
switch(this.direction){case 'horizontal':let clX=event.clientX+this.size/2
let bgBarW=this.bgBar.clientWidth
let bgBarLeft=this.getElementLeft(this.bgBar)
this.val=((clX-bgBarLeft-this.size)/(bgBarW-this.size))*100
break
case 'vertical':let clY=event.clientY+this.size/2
let bgBarH=this.bgBar.clientHeight
let bgBarTop=this.getElementTop(this.bgBar)
this.val=100-((clY-bgBarTop-this.size)/(bgBarH-this.size))*100
break}
this.val=Math.max(0,this.val)
this.val=Math.min(100,this.val)
this.renderLine()
this.eventVal()},getElementLeft:function(element){let{offsetLeft,offsetParent}=element
while(offsetParent!==null){offsetLeft+=offsetParent.offsetLeft
offsetParent=offsetParent.offsetParent}
return offsetLeft},getElementTop:function(element){let{offsetTop,offsetParent}=element
while(offsetParent!==null){offsetTop+=offsetParent.offsetTop
offsetParent=offsetParent.offsetParent}
return offsetTop},renderLine:function(){switch(this.direction){case 'horizontal':this.bgLine.style.width=((this.bgBar.clientWidth-this.size)*this.val)/100+
this.size+
'px'
break
case 'vertical':this.bgLine.style.height=((this.bgBar.clientHeight-this.size)*this.val)/100+
this.size+
'px'
break}},eventVal:function(){this.val=+this.val.toFixed(this.precision)
if(this.oldVal===this.val){return}
this.getVal&&this.getVal(this)
if(this.tip||typeof this.tip==='object')
this.tipBox.innerText=`${this.val}%`},updateVal:function(res){if(res<0||res>100)return
this.val=+res
this.renderLine()
this.val=+res.toFixed(this.precision)
if(this.tip||typeof this.tip==='object')
this.tipBox.innerText=`${this.val}%`},openTip:function(){const btnTip=this.btnTip
this.tipBox=document.createElement('span')
this.tipBox.classList.add('progressVal')
this.tipBox.innerText=`${this.val}%`
btnTip.appendChild(this.tipBox)
this.tip.trigger&&this.tipConfig()},tipConfig:function(){switch(this.tip.trigger){case 'hover':this.tipBox.style.opacity=0
this.bgBar.addEventListener('mouseenter',()=>(this.tipBox.style.opacity=1))
this.bgBar.addEventListener('mouseleave',()=>(this.tipBox.style.opacity=0))
this.bgBar.addEventListener('touchstart',()=>(this.tipBox.style.opacity=1))
this.bgBar.addEventListener('touchend',()=>(this.tipBox.style.opacity=0))
break
case 'show':this.tipBox.style.opacity=1
break}
switch(this.tip.align){case 'bottom':this.tipBox.classList.add('bottom')
break
case 'left':this.tipBox.classList.add('left')
break
case 'right':this.tipBox.classList.add('right')
break}},onLoading:function(){this.btnLoading=document.createElement('span')
const{btnLoading,btnTip}=this
btnLoading.classList.add('loading')
btnTip.appendChild(btnLoading)
btnLoading.style.width=btnTip.offsetWidth+'px'
btnLoading.style.height=btnTip.offsetHeight+'px'},onLoad:function(e,callback=()=>{}){if(typeof e!=='boolean')return alert('onload配置错误')
if(e)this.btnLoading.style.display='block'
callback(this)}}
window.Progress=Progress})(window)