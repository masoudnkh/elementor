<?php

namespace Elementor\Modules\AtomicWidgets\Controls\Types;

use Elementor\Modules\AtomicWidgets\Base\Atomic_Control_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Svg_Control extends Atomic_Control_Base {
	public function get_type(): string {
		return 'image';
	}

	public function get_props(): array {
		return [
			'type' => $this->get_type(),
		];
	}
}
