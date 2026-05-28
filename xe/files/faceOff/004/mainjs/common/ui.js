// JavaScript Document

function TopMenuScroll() {
	this.TopSetTime = null;
	this.SubSetTime = null;
	this.TSetTime = null;
	
	this.TestNum = 0;
	
	this.TM_1DepthHC = new Array();
	this.TM_2DepthOP = new Array();
	
	this.TopMenuStop = 1;
	this.SubMenuStop = 1;
	
	this.Setting = function() {
		this.TMWrap = document.getElementById(this.DivName);
		this.TMWrapSub = this.TMWrap.getElementsByTagName("div")[0];
		this.TMWrapDl = this.TMWrapSub.getElementsByTagName("dl")[0];
		this.TMT_L = this.TMWrapDl.getElementsByTagName("dt");
		this.TMS_L = this.TMWrapDl.getElementsByTagName("dd");
		
		this.TM_Total = this.TMT_L.length;
		
		this.TM_1DepthH = this.TMT_L.item(0).getElementsByTagName("a")[0].offsetHeight;

		for ( var i=0; i<this.TM_Total; i++ ) {
			this.TMT_Link = this.TMT_L.item(i).getElementsByTagName("a")[0];
		
			this.TMT_Link.i = i;
			this.TMT_Link.fnName = this.fnName;
			this.TMT_Link.onmouseover = this.TMT_Link.onfocus = function() {
				clearTimeout(this.TSetTime);
				eval( this.fnName + ".TopMenuMove(" + this.i + ",'open')");
			}

			this.TMS_DD = this.TMS_L.item(i);
			this.TMS_DD.style.display = "none";
			if ( navigator.appName.indexOf("Explorer") != -1 ) {
				this.TMS_DD.style.filter="Alpha(opacity=0)";
			} else {
				this.TMS_DD.style.opacity= 0;
			}
			
			this.TM_1DepthHC[i] = this.TM_2DepthOP[i] = 0;
		}
		
		this.TopmenuDepth2Link();
		
		if (this.current1Depth >= 0) {
			this.TopMenuMove(this.current1Depth,'open');
		}
	}
	
	this.TopMenuMove = function(depth1,show) {
		this.TMWrapSub.style.backgroundImage = "url(./img/bg_topmenu_bottom.gif)";
		this.TopMenuDepth1(depth1,show);
	}
	
	this.TopMenuDepth1 = function(depth1,show) {
		clearTimeout(this.TopSetTime);
		for ( var i=0; i<this.TM_Total; i++ ) {
			this.TMT_Link = this.TMT_L.item(i).getElementsByTagName("a")[0];
			if ( i == depth1 ) {
				this.TM_1DepthHC[i] = this.TM_1DepthHC[i] + ( this.TM_1DepthH - this.TM_1DepthHC[i] ) * this.Speed;
			} else {
				this.TM_1DepthHC[i] = this.TM_1DepthHC[i] + ( 0 - this.TM_1DepthHC[i] ) * this.Speed;
			}
			
			if ( show == "open" ) {
				if ( this.TM_1DepthHC[depth1] > this.TM_1DepthH - 1 ) {
					this.TopMenuStop = 0;
					if ( i == depth1 ) {
						this.TM_1DepthHC[i] = this.TM_1DepthH;
					} else {
						this.TM_1DepthHC[i] = 0;
					}
				}
			} else {
				if ( this.TM_1DepthHC[depth1-1] < 1 ) {
					this.TopMenuStop = 0;
					this.TM_1DepthHC[i] = 0;
				}
			}
			this.TMT_Link.style.backgroundPosition = "left -" + this.TM_1DepthHC[i] + "px";
		}
		
		this.TMWrapSubTemp = this.TMWrapSub.offsetHeight;
		this.TMWrapSubTemp = this.TMWrapSubTemp+(this.Depth2HeightEnd-this.TMWrapSubTemp )*this.Speed;
		this.TMWrapSub.style.height = this.TMWrapSubTemp + "px";
		
		if ( this.TopMenuStop == 1 ) {
			this.TopSetTime = setTimeout( this.fnName + ".TopMenuDepth1(" + depth1 + ",'" + show + "')",20);
		} else {
			this.TMWrapSub.style.height = this.Depth2HeightEnd + "px";
			this.TopMenuStop = 1;
			
			if (this.current2Depth >= 0) {
				this.TopMenuDepth2(depth1,this.current2Depth,show);
			} else {
				this.TopMenuDepth2(depth1,this.current2Depth,show);
			}
		}
	}
	
	this.TopMenuDepth2 = function(depth1,depth2,show) {
		clearTimeout(this.SubSetTime);
		for ( var i=0; i<this.TM_Total; i++ ) {
			this.TMS_LTemp = this.TMS_L.item(i);
			if ( i == depth1 ) {
				this.TMS_LTemp.style.display = "block";
				this.TM_2DepthOP[i] = this.TM_2DepthOP[i]+(100-this.TM_2DepthOP[i])*this.Speed;
			} else {
				this.TM_2DepthOP[i] = this.TM_2DepthOP[i]+(0-this.TM_2DepthOP[i])*this.Speed;
			}
			
			if ( this.TM_2DepthOP[depth1] > 100 - 1 ) {
				this.SubMenuStop = 0;
				if ( i == depth1 ) {
					this.TM_2DepthOP[i] = 100;
				} else {
					this.TM_2DepthOP[i] = 0;
				}
			}

			
			if ( navigator.appName.indexOf("Explorer") != -1 ) {
				this.TMS_LTemp.style.filter="Alpha(opacity=" + this.TM_2DepthOP[i] +  ")";
			} else {
				this.TMS_LTemp.style.opacity= this.TM_2DepthOP[i]/100;
			}
			
			if ( this.SubMenuStop == 0 ) {
				if ( i == depth1 ) {
					this.TMS_LTemp.style.display = "block";
				} else {
					this.TMS_LTemp.style.display = "none";
				}
			}
			
		}
		
		if ( this.SubMenuStop == 1 ) {
			this.SubSetTime = setTimeout( this.fnName + ".TopMenuDepth2(" + depth1 + ",'" + show + "')",20);
			if ( this.current1Depth == depth1 && depth2 >= 0 ) {
				this.TopmenuDepth2Link(depth1,depth2);
			}
		} else {
			this.SubMenuStop = 1;
		}
	}
	

	this.TopmenuDepth2Link = function(depth1,depth2) {
		for ( var i=0; i<this.TM_Total; i++ ) {
			this.TMS_Li = this.TMS_L.item(i).getElementsByTagName("ul")[0].getElementsByTagName("li");
			this.TMS_LiTotal = this.TMS_Li.length;
		
			for ( var j=0; j<this.TMS_LiTotal; j++ ) {
				this.TMS_Link = this.TMS_Li.item(j).getElementsByTagName("a")[0];
				this.TMS_Link.fnName = this.fnName;
				this.TMS_Link.DefaultLeft = getStyle(this.TMS_Link,'backgroundPositionX','background-position');
				this.TMS_Link.onmouseover = this.TMS_Link.onfocus = function() {
					this.style.backgroundPosition = this.DefaultLeft + " -16px";
				}
				this.TMS_Link.onmouseout = this.TMS_Link.onblur = function() {
					this.style.backgroundPosition = this.DefaultLeft + " 0px";
				}
			}
		}
		if ( depth1 >= 0 && depth2 >= 0 ) {
			this.TMS_Link = this.TMS_L.item(depth1).getElementsByTagName("ul")[0].getElementsByTagName("li")[depth2].getElementsByTagName("a")[0];
			this.TMS_Link.Top = getStyle(this.TMS_Link,'backgroundPositionX','background-position');
			this.TMS_Link.style.backgroundPosition = this.TMS_Link.Top + " -16px";
			this.TMS_Link.onmouseout = this.TMS_Link.onblur = null;
		}
	}
	
}

function getStyle(obj, jsprop, cssprop) {
	var objNum;
	if (obj.currentStyle) {
		objNum = obj.currentStyle[jsprop];
	} else if (window.getComputedStyle) {
		objNumTemp = document.defaultView.getComputedStyle(obj, null).getPropertyValue(cssprop).split(" ");
		objNum = objNumTemp[0];
	} else {
		objNum = null;
	}
	
	return objNum;
}