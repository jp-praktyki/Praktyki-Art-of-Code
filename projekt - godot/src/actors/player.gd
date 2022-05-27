extends Actor

export var stomp_impulse: = 1000.0


func _on_enemy_detector_body_entered(_body):
	velocity = calculate_stomp_velocity(velocity, stomp_impulse)


func _on_enemy_detector_body_shape_entered(body_rid, body, body_shape_index, local_shape_index):
	queue_free()
	

func _physics_process(_delta):
	var is_jump_interrupted: = Input.is_action_just_released("jump") and velocity.y < 0.0
	var direction = get_direction()
	velocity = calculate_move_velocity(velocity, direction, speed, is_jump_interrupted)
	velocity = move_and_slide(velocity, FLOOR_NORMAL)


func get_direction():
	return Vector2(
		Input.get_action_strength("move_right") - 
		Input.get_action_strength("move_left"), 
		-Input.get_action_strength("jump") if is_on_floor() and Input.is_action_just_pressed("jump") 
		else 0.0
	)
	
func calculate_move_velocity(
		linear_velocity: Vector2,
		direction: Vector2,
		speed: Vector2,
		is_jump_interrupted: bool
	) -> Vector2:
	var velocity: = linear_velocity
	velocity.x = speed.x * direction.x
	velocity.y += gravity * get_physics_process_delta_time()
	if direction.y == -1.0:
		velocity.y = speed.y * direction.y
	if is_jump_interrupted:
		velocity.y = 0.0
	return velocity

func calculate_stomp_velocity(velocity: Vector2, impulse: float) -> Vector2:
	var out: = velocity
	out.y = -impulse
	return out


