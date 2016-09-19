<?php
/*
 *  Copyright (c) Shteve0 <no email> 2012. All Rights Reserved.
 *
 *
 *  This file is part of OBBLM.
 *
 *  OBBLM is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  OBBLM is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
define('T_RACE_DEEP_ONES', 67);

$DEA['Deep Ones'] => array (
      'other'   => array (
         'rr_cost' => 60000,
         'icon' => 'apesofwrath.png',
         'race_id' => T_RACE_DEEP_ONES, # (Deep Ones)
      ),
      'players'   => array (
         'Fishman'   => array (
            'ma'        => 5,
            'st'        => 3,
            'ag'        => 2,
            'av'        => 8,
            'def'       => array (78),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 40000,
            'icon'      => 'olineman1an',
            'pos_id'    => 671,
         ),
         'Sharkman'   => array (
            'ma'        => 6,
            'st'        => 4,
            'ag'        => 2,
            'av'        => 8,
            'def'       => array (5, 53),
            'norm'      => array ('G', 'S'),
            'doub'      => array ('A', 'P'),
            'qty'       => 2,
            'cost'      => 120000,
            'icon'      => 'othrower1an',
            'pos_id'    => 672,
         ),
         'Octopusman'   => array (
            'ma'        => 4,
            'st'        => 4,
            'ag'        => 2,
            'av'        => 8,
            'def'       => array (77, 73),
            'norm'      => array ('G', 'S'),
            'doub'      => array ('A', 'P'),
            'qty'       => 2,
            'cost'      => 90000,
            'icon'      => 'oblackorc1an',
            'pos_id'    => 673,
         ),
         'Anemone Diver'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (98, 103),
            'norm'      => array ('G', 'A'),
            'doub'      => array ('S', 'P'),
            'qty'       => 2,
            'cost'      => 90000,
            'icon'      => 'oblitzer1an',
            'pos_id'    => 674,
         ),
         'Crabman'   => array (
            'ma'        => 4,
            'st'        => 5,
            'ag'        => 1,
            'av'        => 9,
            'def'       => array (99, 59, 26, 71, 112),
            'norm'      => array ('S'),
            'doub'      => array ('G','A', 'P'),
            'qty'       => 1,
            'cost'      => 140000,
            'icon'      => 'ogre4an',
            'pos_id'    => 675,
         )
      )
);
