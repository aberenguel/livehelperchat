<?php if ($currentUser->hasAccessTo('lhchat','use')) : ?>
	<div class="card card-dashboard" data-panel-id="my_chats" ng-init="lhc.getToggleWidget('my_chats_widget_exp')">
		<div class="card-header">
			<a href="<?php echo erLhcoreClassDesign::baseurl('chat/list')?>/(user_id)/<?php echo erLhcoreClassUser::instance()->getUserID()?>"><i class="material-icons chat-active">account_box</i> <?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/titles/my_active_chats.tpl.php'));?> ({{my_chats.list.length}}{{my_chats.list.length == lhc.limitmc ? '+' : ''}})</a>
			<a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','collapse/expand')?>" ng-click="lhc.toggleWidget('my_chats_widget_exp')" class="fs24 float-right material-icons exp-cntr">{{lhc.toggleWidgetData['my_chats_widget_exp'] == false ? 'expand_less' : 'expand_more'}}</a>
		</div>

		<div ng-if="lhc.toggleWidgetData['my_chats_widget_exp'] !== true">

			<?php $optinsPanel = array('panelid' => 'mcd','limitid' => 'limitmc'); ?>
			<?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/parts/options.tpl.php'));?>

			<div ng-if="my_chats.list.length > 0" class="panel-list">
				<table class="table table-sm mb-0 table-small table-fixed">
					<thead>
						<tr>
							<th width="60%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Visitor');?>" class="material-icons">face</i></th>
                            <?php include(erLhcoreClassDesign::designtpl('lhchat/lists/additional_column_header.tpl.php'));?>
							<th width="20%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Status');?>" class="material-icons">&#xE80E;</i></th>
							<th width="20%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Department');?>" class="material-icons">home</i></th>
						</tr>
					</thead>
					<tr ng-repeat="chat in my_chats.list track by chat.id" ng-class="{'user-away-row': chat.user_status_front == 2, 'user-online-row': chat.user_status_front == 0}">
						<td>
							<div class="abbr-list"><span ng-if="chat.country_code != undefined"><img ng-src="<?php echo erLhcoreClassDesign::design('images/flags');?>/{{chat.country_code}}.png" alt="{{chat.country_name}}" title="{{chat.country_name}}" />&nbsp;</span><a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Open in a new window');?>" class="material-icons" ng-click="lhc.startChatNewWindow(chat.id,chat.nick)">open_in_new</a><a ng-click="lhc.previewChat(chat.id)" class="material-icons">info_outline</a> <a ng-click="lhc.startChat(chat.id,chat.nick)" title="{{chat.nick}}"> {{chat.nick}} </a></div>
						</td>
                        <?php include(erLhcoreClassDesign::designtpl('lhchat/lists/additional_column_body.tpl.php'));?>
						<td>						  
						
							<div class="abbr-list" title="{{chat.status == 1 ? 'Active' : 'Pending'}}">
							    <i ng-if="chat.status != 1" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Pending chat');?>" class="material-icons chat-unread">&#xE80E;</i>
                                {{chat.wait_time_pending}}
							</div>							
						</td>
						<td>
							<div class="abbr-list" title="{{chat.department_name}}{{chat.product_name ? ' | '+chat.product_name : ''}}">{{chat.department_name}}{{chat.product_name ? ' | '+chat.product_name : ''}}</div>
						</td>
					</tr>
				</table>
			</div>
			
			<div ng-if="!my_chats || my_chats.list.length == 0" class="m-1 alert alert-info"><i class="material-icons">search</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Nothing found')?>...</div>

		</div>
	</div>
<?php endif; ?>