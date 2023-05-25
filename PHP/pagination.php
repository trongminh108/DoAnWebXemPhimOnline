<?php
	function pagination($totalPage,$page){
		if($totalPage>1){
			echo'<ul class="pagination justify-content-center">';
				if($page > 1){
					echo'<li class="page-item">
							<button type="submit" class="buttonPagination">
								<a class="page-link" href="?page='.($page-1).'"><</a>
							</button>
						</li>';
				}
				$listPage = [1, $page-1, $page, $page+1, $totalPage];
				$isFirst = $isLast = false;
				for($i=0; $i<$totalPage; $i++){
					if(!in_array($i+1, $listPage)){
						if(!$isFirst && $page>3){
							echo'<li class="page-item">
									<button type="submit" class="buttonPagination">
										<a class="page-link" href="?page='.($page-2).'">...</a>
									</button>
								</li>';
							$isFirst = true;
						}
						if(!$isLast && $i>$page){
							echo'<li class="page-item">
								<button type="submit" class="buttonPagination">
									<a class="page-link" href="?page='.($page+2).'">...</a>
								</button>
							</li>';
							$isLast = true;
						}
						continue;
					}
					if($page == ($i+1)){
						echo'<li class="page-item active">
							<button type="submit" class="buttonPagination">
								<a class="page-link" href="#">'.($i+1).'</a>
							</button>
						</li>';
					}
					else{
						echo'<li class="page-item">
								<button type="submit" class="buttonPagination">
									<a class="page-link" href="?page='.($i+1).'">'.($i+1).'</a>
								</button>
							</li>';
					}
				}
				if($page < $totalPage){
					echo'<li class="page-item">
						<button type="submit" class="buttonPagination">
							<a class="page-link" href="?page='.($page+1).'">></a>
						</button>
					</li>';
				}
			echo'</ul>';
		}
	}