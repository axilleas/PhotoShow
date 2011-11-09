<?php
/*
    This file is part of PhotoShow.

    PhotoShow is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    PhotoShow is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with PhotoShow.  If not, see <http://www.gnu.org/licenses/>.
*/

class Comment
{
	public $login;
	public $date;
	public $content;

	public function __construct($login,$content,$date=null){
		$this->login	=	$login;
		$this->content	=	$content;
		$this->date		=	$date;
	}
	
	public function __toString(){
		echo "<div class='comment'>\n";
		echo "<div class='login'>$login</div>\n";
		echo "<div class='content'>$content</div>\n";
		echo "</div>\n";
	}
}
?>