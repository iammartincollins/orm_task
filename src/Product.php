<?php
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity(repositoryClass="ProductRepository")
 * @Table(name="products")
 */
class Product {
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
	/**
	 * @Column(type="string", name="description")
	 */
	protected $description;
	/**
	 * @Column(type="decimal", name="price", scale=2, precision=6)
	 */
	protected $price;
	
	/**
     * @ManyToMany(targetEntity="Category")
     **/
	protected $categories; //FK
	
	public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function assignToCategory($category)
    {
        $this->categories[] = $category;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function clearCategories()
    {
        $this->getCategories()->clear();
    }

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
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
}