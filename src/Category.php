<?php
/**
 * @Entity(repositoryClass="ProductRepository")
 * @Table(name="category")
 */
class Category {
	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue
	 */
	protected $id;
	/**
	 * @Column(type="string", name="name")
	 */
	protected $name;

	///**
 	//* @ManyToMany(targetEntity="Product")
    //*/ 
	// protected $products; //FK

	public function getId()
	{
		return $this->id;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
}