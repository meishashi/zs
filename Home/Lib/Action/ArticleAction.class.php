<?php
class ArticleAction extends Action {
  protected function _initialize(){
		$cate = M('article_cate');
		$data = $cate -> field('id,name') ->order('sort asc')->select();
		$this->assign('data',$data);
  }
  public function lists(){
		$m = M('article');
		$list = $m -> field('id,title,content')->limit(6)->select();
		$this->assign('lists',$list);
		$this->display();
  }
  public function detail(){
  	$article = M('article');
  	$result = $article -> where(array('id'=>$this->_get('id')))->find();

  	$this->assign('result',$result);
  	$this->display();
  }
  public function addPinglun(){
  	$post = $this->_post();
  	if(empty($post['pinglun'])){
  		$info['msg'] = '评论不能为空!';
  		$info['status'] = 0;
  		$this->ajaxReturn($info);
  	}
  	$post['uid'] = $_SESSION['user']['id'];
  	$post['ctime'] = time();
		$result =	M('pinglun')->add($post);
  	if($result){
  		$info['msg'] = '评论成功!';
  		$info['status'] = 1;
  		$this->ajaxReturn($info);
  	}else{
  		$info['msg'] = '评论失败!请稍后再试!';
  		$info['status'] = 0;
  		$this->ajaxReturn($info);
  	}
  }


	public function listss(){
		// $this->display();
		$m = M('article');
		$list = $m -> field('id,title,content')->select();
		// dump($list);
		$test = '<div style="margin:0px;padding:0px;border:0px;font-family:STHeiti, " white-space:normal;background-color:#f8f8f8;"="">
	<p class="img-wrapper-embedded" style="margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;background:url(" width:776px;min-height:283.844px;"=""> <img src="http://p1.pstatp.com/large/12dd0008063647c7d5fd" img_width="550" img_height="413" alt="大陆对“台独”的警告开始奏效？" data-index="0" style="margin:4px auto;padding:0px;width:776px;display:block;" /> <img src="http://p1.pstatp.com/large/12dd0008063647c7d5fd" img_width="550" img_height="413" alt="大陆对“台独”的警告开始奏效？" data-index="0" style="margin:4px auto;padding:0px;width:776px;display:block;" /> <img src="http://p1.pstatp.com/large/12dd0008063647c7d5fd" img_width="550" img_height="413" alt="大陆对“台独”的警告开始奏效？" data-index="0" style="margin:4px auto;padding:0px;width:776px;display:block;" /> <img src="http://p1.pstatp.com/large/12dd0008063647c7d5fd" img_width="550" img_height="413" alt="大陆对“台独”的警告开始奏效？" data-index="0" style="margin:4px auto;padding:0px;width:776px;display:block;" /> 
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		把“公投台独建国”视为建党最高价值的民进党，在最近大陆军机两次绕行台湾后，立即就退缩了。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		台湾“立法院内政委员会”15日审查“公民投票法”修正草案时，民进党籍“立委”对于他们在野时所拼死也要纳入的“领土主权纳入公投范围”、“两岸政治事务协商前后都需要公投”两大主张，如今竟然全部噤声，不敢向前蠢动了。此一重大变化，正好发生在11月25日、12月10日大陆先后各派出四架军机，分别以逆时钟、顺时钟方向绕行台湾之后。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		1991年10月，民进党代表大会通过的“台独党纲”称，“基于国民主权原理，建立主权独立自主的共和国及制订新宪法的主张，应交由台湾全体住民以公民投票方式选择决定”。自此，“公投台独建国”成为民进党最鲜明、最自引为爱台湾的政治旗帜。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		2007年9月，民进党代表大会又制订“正常国家决议文”，宣称“从‘命运共同体’的台湾认同感出发，深化台湾民主价值，强化台湾意识，早日完成正名制宪。并在适当时机举行公民投票，以彰显台湾为“主权独立国家”。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		无论国民党如何提醒“公投台独”或“公投”抗拒国家统一，对两岸和平、台海稳定、台湾安全的危害有多么严重，民进党始终不仅置若罔闻，更激烈指控国民党“倾中卖台”、向中共投降，并且藉此在与国民党的政治竞逐中不断获益。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		虽然民进党于2000年的八年曾经执政，但国民党仍为“立法院”的多数党。正因为有国民党作为对大陆的挡箭牌，所以民进党对“公投台独”的主张和动作，都有恃无恐，肆无忌惮。如今，他们在掌握行政权及首度跃居“立法院”的多数党后，不得不对“公投台独”收手，原因正是唯恐大陆立即和他们摊牌。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		今年台湾再次政党轮替后，蔡英文当局的“台独”动向相当明显，大陆一再对此发出警告，包括大陆领导人强调“坚决遏制”，以及人民日报等官方媒体多次重提“反分裂国家法”。直到最近大陆军机两度绕台飞行，终于促使蔡当局、民进党感受大陆不只是虚张声势，才一改态度，未将“领土主权”与两岸政治协商纳入“公投”范围。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		大陆对“台独”的警告是否开始奏效，民进党是否只是暂时害怕大陆使出重手，都仍有待观察，但已证明“台独”确实危害台湾安全，也证明国民党过去基于两岸关系大局为考量而力挡“公投台独”，是正确的。
	</p>
	<p style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;">
		来源：台湾“中央日报”网络报
	</p>
		</div>
<p class="footnote" style="margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;font-family:STHeiti, " white-space:normal;background-color:#f8f8f8;"="">
	本文为头条号作者发布，不代表今日头条立场。
			</p>';
		$rule = '/<img[^>]*?(src="[^"]*?")[^>]*?>/';
		preg_match_all($rule,$test,$result);  
    dump($result);  
    dump(count($result[1]));
  }
}