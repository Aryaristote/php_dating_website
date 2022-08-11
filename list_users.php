<?php 
    session_start();

    require 'config/database.php';
    require 'includes/functions.php';
    require 'includes/constant.php';

    //Pagination
	$req = $db->query('SELECT id FROM users');
	$nbre_total_users = $req->rowCount();

	if($nbre_total_users >= 1){

		$nbre_users_par_page = 12;
		$nbre_pages_max_gauche_et_droite = 4;
		$last_page = ceil($nbre_total_users / $nbre_users_par_page);

		if(isset($_GET['page']) && is_numeric($_GET['page'])){
			$page_num = $_GET['page'];
		} else {
			$page_num = 1;
		}

		if($page_num < 1){
			$page_num = 1;
		} else if($page_num > $last_page) {
			$page_num = $last_page;
		}

		$limit = 'LIMIT '.($page_num - 1) * $nbre_users_par_page. ',' . $nbre_users_par_page;

		//Cette requête sera utilisée plus tard
		$q = $db->query("SELECT id, pseudo, name, email FROM users ORDER BY pseudo $limit");
		$users = $q->fetchAll(PDO::FETCH_OBJ);

		$pagination = '<div class="col-lg-12"><div class="pagination-area text-center">';

		if($last_page != 1){
			if($page_num > 1){
				$previous = $page_num - 1;
				//Previous Page
				$pagination .= '<a class="pagination_btn" href="list_users.php?page='.$previous.'"><i class="fas fa-angle-double-left"></i></a>';

				for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
					if($i > 0){
						$pagination .= '<a href="list_users.php?page='.$i.'">'.$i.'</a> &nbsp;';
					}
				}
			}

			//Current page
			$pagination .= '<a href="#" class="active">'.$page_num.'</a>&nbsp;';

			for($i = $page_num+1; $i <= $last_page; $i++){
				$pagination .= '<a href="list_users.php?page='.$i.'">'.$i.'</a> ';
				
				if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
					break;
				}
			}

			//Next Page
			if($page_num != $last_page){
				$next = $page_num + 1;
				$pagination .= '<a class="pagination_btn" href="list_users.php?page='.$next.'"><i class="fas fa-angle-double-right"></i></a> ';
			}
		}

		$pagination .= '</div></div>';

		require 'views/list_users.views.php';
	}else{
		set_flash("Not user found right now");
		redirect("index.php");
	}