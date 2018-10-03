<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {


	public function get_relative_tags($id)
	{
		$this->db->select('tag_id');
		$this->db->where('news_id', $id);
		$query = $this->db->get('relative_tags');

		$tags=array();
		foreach ($query->result() as $row)
		{
		        $tags[]=$row->tag_id;
		}
		return $tags;
	}

	public function get_relative_tags_by_name($id)
	{
		$this->db->select('title');
		$this->db->order_by('rand()');
		$this->db->from('tags');
		$this->db->join('relative_tags', 'tags.tag_id = relative_tags.tag_id and relative_tags.news_id='.$id);
		$query = $this->db->get();

		$tags=array();
		foreach ($query->result() as $row)
		{
		        $tags[]=$row->title;
		}
		return $tags;
	}

	public function delete_relative_tags($id)
	{
		$this->db->where('news_id', $id);
		return $this->db->delete('relative_tags');
	}

	public function delete_relative_tags_by_id($id)
	{
		$this->db->where('tag_id', $id);
		return $this->db->delete('relative_tags');
	}

	public function addCat($data)
	{
		return $this->db->insert('category',$data);
	}

	public function getcat()
	{
		$query = $this->db->get('category');
		return $query->result();
	}

	public function getcatbylimit($limit)
	{
		$this->db->limit($limit);
		$query = $this->db->get('category');
		return $query->result();
	}

	public function getcatnewsbylimit($catid,$limit)
	{
		$this->db->limit($limit);
		$this->db->order_by('news_id', 'desc');
		$this->db->where('cat_id', $catid);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function getcatnamewhere($cat_id)
	{
		$this->db->where('cat_id', $cat_id);
		$query = $this->db->get('category');
		$value[]=$query->row();
		if(sizeof($value))
			return ucfirst($value[0]->title);
		return '';
	}

	public function getcatwhere($cat_id)
	{
		$this->db->where('cat_id', $cat_id);
		$query = $this->db->get('category');
		return $query->row();
	}

	public function editcat($cat_id,$data)
	{
		$this->db->where('cat_id', $cat_id);
		return $this->db->update('category', $data);
	}

	public function deletecat($cat_id)
	{
		# code...
		$this->db->where('cat_id', $cat_id);
		return $this->db->delete('category');
	}

	public function addTags($data)
	{
		return $this->db->insert('tags',$data);
	}

	public function gettags()
	{
		$query = $this->db->get('tags');
		return $query->result();
	}

	public function gettagsbylimit($limit)
	{
		$this->db->limit($limit);
		$query = $this->db->get('tags');
		return $query->sresult();
	}

	public function gettagsnewsbylimit($tagid,$limit)
	{
		$this->db->limit($limit);
		$this->db->order_by('news_id', 'desc');
		$this->db->where('tag_id', $tagid);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function gettagnamewhere($tag_id)
	{
		$this->db->where('tag_id', $tag_id);
		$query = $this->db->get('tags');
		$value[]=$query->row();
		if(sizeof($value))
			return ucfirst($value[0]->title);
		return '';
	}

	public function gettagswhere($tag_id)
	{
		$this->db->where('tag_id', $tag_id);
		$query = $this->db->get('tags');
		return $query->row();
	}

	public function edittags($tag_id,$data)
	{
		$this->db->where('tag_id', $tag_id);
		return $this->db->update('tags', $data);
	}

	public function deletetags($tag_id)
	{
		# code...
		$this->delete_relative_tags_by_id($tag_id);
		$this->db->where('tag_id', $tag_id);
		return $this->db->delete('tags');
	}

	public function adduser($data)
	{
		# code...
		return $this->db->insert('users', $data);
	}

	public function checkuserexist($username){
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		if($query->num_rows() == 0){
			return false;
		}else{
			return true;
		}
	}

	public function getallusers()
	{
		$query = $this->db->get('users');
		return $query->result(); 
	}

	public function getuserwhere($user_id)
	{
		$this->db->where('id', $user_id);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function deleteuser($user_id)
	{
		$this->db->where('id', $user_id);
		return $this->db->delete('users');
	}

	public function edituser($user_id,$data)
	{
		$this->db->where('id', $user_id);
		return $this->db->update('users', $data);
	}

	public function getsettings()
	{
		$query = $this->db->get('settings');
		return $query->row();
	}

	public function setsettings($data)
	{
		return $this->db->update('settings', $data);
	}

	public function addpage($data)
	{
		return $this->db->insert('pages', $data);
	}

	public function getpages()
	{
		$query = $this->db->get('pages');
		return $query->result();
	}

	public function getpagewhere($page_id)
	{
		$this->db->where('id', $page_id);
		$query = $this->db->get('pages');
		return $query->row();
	}

	public function editpage($page_id,$data)
	{
		$this->db->where('id', $page_id);
		return $this->db->update('pages', $data);
	}

	public function deletepage($page_id)
	{
		$this->db->where('id', $page_id);
		return $this->db->delete('pages');
	}

	////////start of news 
	public function addnews($data, $tags)
	{
		$this->db->insert('news', $data);
		if($this->db->insert_id())
		{
			$id=$this->db->insert_id();
			$tags=$tags['tags'];
			foreach ($tags as $row)
			{
				$val=array('news_id'=> $id, 'tag_id'=> $row);
				if(!$this->db->insert('relative_tags', $val)) {
					deletenews($id);
					return false;
				}
			}
			return true;
		}
		deletenews($id);
		return false;
	}

	public function getnews($limit,$page)
	{
		$this->db->order_by('news_id', 'desc');
		$this->db->limit($limit,$page);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function getnewsbylimit($limit)
	{
		$this->db->order_by('news_id', 'desc');
		$this->db->limit($limit);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function getnewsforslider($limit)
	{
		$this->db->select('ANY_VALUE(tag_id) as tag_id , ANY_VALUE(news.news_id) as news_id , title , content , user_id , cat_id , image , youtube_video , dateposted , visits');
		$this->db->order_by('news.news_id', 'desc');
		$this->db->group_by('news.news_id');
		$this->db->having('count(distinct news.news_id) = 1');
		$this->db->from('relative_tags');
		$this->db->join('news', 'relative_tags.news_id = news.news_id');
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

	public function getmostreadnewsbylimit($limit)
	{
		$this->db->order_by('visits', 'desc');
		$this->db->limit($limit);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function getlatestvideosbylimit($limit)
	{
		$this->db->order_by('news_id', 'desc');
		$this->db->limit($limit);
		$this->db->where('youtube_video !=', "");
		$query = $this->db->get('news');
		return $query->result();
	}


	public function getnewsbyid($newsid)
	{
		$this->db->where('news_id', $newsid);
		$query = $this->db->get('news');
		return $query->row();
	}

	public function num_news()
	{
		$query = $this->db->get('news');
		return $query->num_rows();
	}

	public function deletenews($newsid)
	{
		$this->delete_relative_tags($newsid);
		$this->db->where('news_id', $newsid);
		return $this->db->delete('news');
	}

	public function editnews($newsid,$data)
	{
		$this->db->where('news_id', $newsid);
		$this->db->update('news', $data);
		$id=$newsid;
		$tags=$tags['tags'];
		$this->delete_relative_tags($id);
		foreach ($tags as $row)
		{
			$val=array('news_id'=> $id, 'tag_id'=> $row);
			if(!$this->db->insert('relative_tags', $val)) {
				return false;
			}
		}
		return false;

	}

	public function updatenewsvisits($newsid)
	{
		$this->db->where('news_id', $newsid);
		return $this->db->query("update news set visits = visits + 1 where news_id = $newsid ");
	}

	//start of login / logout
	public function login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users', 1);
		return $query->num_rows();
	}

	public function getuserid($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function getcommentswhere($newsid)
	{
		$this->db->order_by('commnt_id', 'desc');
		$this->db->where('news_id', $newsid);
		$query = $this->db->get('comments');
		return $query->result();
	}

	public function getcommentsnumwhere($newsid)
	{
		$this->db->order_by('commnt_id', 'desc');
		$this->db->where('news_id', $newsid);
		$query = $this->db->get('comments');
		return $query->num_rows();
	}

	public function addcomment($data)
	{
		return $this->db->insert('comments', $data);
	}

	public function getrelatednews($like,$newsid)
	{
		$this->db->limit(6);
		$this->db->where('news_id !=', $newsid);
		$this->db->order_by('news_id', 'random');
		$query = $this->db->get('news');
		return $query->result();
	}

	public function getcatnews($cat_id,$limit,$page)
	{
		$this->db->where('cat_id', $cat_id);
		$this->db->limit($limit,$page);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function numcat_news($catid)
	{
		$this->db->where('cat_id', $catid);
		$query = $this->db->get('news');
		return $query->num_rows();
	}

	public function search($search)
	{
		$this->db->like('title',$search);
		$this->db->or_like('title',$search);
		$query = $this->db->get('news');
		return $query->result();
	}

	public function searchnum($search)
	{
		$this->db->like('title',$search);
		$this->db->or_like('title',$search);
		$query = $this->db->get('news');
		return $query->num_rows();
	}

	public function getadds($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('ads');
		return $query->row();
	}

	public function editadds($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('ads', $data);
	}

	public function getdetails()
	{
		$query = $this->db->get('details');
		return $query->row();
	}

	public function updatedetails($data)
	{
		return $this->db->update('details', $data);
	}

	//begin check of news , pages . categories

	public function news_exist($newsid)
	{
		$this->db->where('news_id', $newsid);
		$query = $this->db->get('news');
		return $query->num_rows();
	}

	public function page_exist($pageid)
	{
		$this->db->where('id', $pageid);
		$query = $this->db->get('pages');
		return $query->num_rows();
	}

	public function cat_exist($catid)
	{
		$this->db->where('cat_id', $catid);
		$query = $this->db->get('category');
		return $query->num_rows();
	}
}

/* End of file adminModel.php */
/* Location: ./application/models/adminModel.php */
?>
