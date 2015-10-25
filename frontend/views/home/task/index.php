<div class="col-sm-10 col-xs-12 mb-10"  id="header-addon-1">
   					 <div class="btn-group">
						  <button type="button" class="btn btn-default dropdown-toggle width-160" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="glyphicon glyphicon-fire"></i> &nbsp;我的任务 <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="#">我的任务</a></li>
						    <li><a href="#">整个项目</a></li>
						  </ul>
					</div>
	               <div class="btn-group">
						  <button type="button" class="btn btn-default dropdown-toggle width-160" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="glyphicon glyphicon-fire"></i> &nbsp;紧急度 <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="#">极紧急</a></li>
						    <li><a href="#">紧急</a></li>
						    <li><a href="#">普通</a></li>
						    <li><a href="#">可缓</a></li>
						  </ul>
					</div>
	                <div class="btn-group hidden-sm hidden-xs">
						  <button type="button" class="btn btn-default dropdown-toggle width-160" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="glyphicon glyphicon-pushpin"></i> &nbsp;困难度 <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="#">很难</a></li>
						    <li><a href="#">较难</a></li>
						    <li><a href="#">普通</a></li>
						    <li><a href="#">简单</a></li>
						  </ul>
					</div>
					<div class="btn-group hidden-sm hidden-xs">
						  <button type="button" class="btn btn-default dropdown-toggle width-160" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="glyphicon glyphicon-hourglass"></i> &nbsp;完成度 <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="#">未完成</a></li>
						    <li><a href="#">已完成</a></li>
						    <li><a href="#">延迟处理</a></li>
						  </ul>
					</div>
					<div class="btn-group f-right">
						  <button type="button" class="btn btn-success" onclick="url_to('task')"><i class="fa fa-edit"></i> &nbsp;发布任务</button>
						  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" >
						    <li><a href="#">报错</a></li>
						    <li><a href="#">建议</a></li>
						    <li><a href="#">日志</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#">规划</a></li>
						  </ul>
					</div>
   			</div>
  </div>
  <div class='row'>
  			<div class='col-sm-12 col-md-10'>
    	{% for item in res %}
    		<div class="row" style="border-bottom:1px solid lightgray;">
                <div style="min-height:132px;" class="col-sm-12 col-xs-12 post">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 mb-5  item-title">
                            <h4 class='f-left'><strong><a href="/task-{{item._id}}" target="_blank" class="a-1">
                        {{ item.title }} . {{ loop.index }}</a>
                        </strong>
                        </h4>
                            <span class='ml-10'>
                          
  <i class="glyphicon glyphicon-comment"></i> 4
</span>
                              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 post-header-line">
                            <i class="glyphicon glyphicon-tag"></i>
                            
                            &nbsp;修复问题                            &nbsp;&nbsp;|&nbsp;&nbsp; 
                            <i class="glyphicon glyphicon-fire"></i>
                            &nbsp;紧急度{{ item.priority }}                            &nbsp;&nbsp;|&nbsp;&nbsp; 
                            <i class="glyphicon glyphicon-pushpin"></i>
                            &nbsp;困难度 {{ item.difficulty }}                         &nbsp;&nbsp;|&nbsp;&nbsp;
                            <i class="glyphicon glyphicon-hourglass"></i> 

                            &nbsp;进度{{ item.progress }}%                            
                            &nbsp;&nbsp;|&nbsp;&nbsp; 创建：vincent
							&nbsp;&nbsp;|&nbsp;&nbsp; 执行：{{ item.assign_to }}
                        </div>

                    </div>
                    <span style='color:#666;font-size:13px;'>  </span>
                    <div class="row pt-6 mt-10">
                                                <div class="col-md-12">
                            <p>
                             
                           {{ item.content }}                        
                            
                            </p>
                        </div>
                                                <div class="col-md-12 mt-10 hidden-xs">
                            <ul class="channel-thumb">
                                                                <div class="void"></div>
                            </ul>
                            <div class="void"></div>
                        </div>
                        
                    </div>
                   <!--  div class="f-right mt-10" style='color:#333;font-size:13px;'>
                        创建 : Vincent.mi  &nbsp;&nbsp;|&nbsp;&nbsp;
                        执行 : Hugo.huang，faith，aya，henry &nbsp;&nbsp;|&nbsp;&nbsp;
                        2015-06-06 11:59:22</div -->
                </div>
            </div>
    	{% endfor %}
    	<div class='clearfix'></div>
  </div>

   				
        
   
	
