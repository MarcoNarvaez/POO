class PayPal extends Payment {
    String reference;
    String branch;

    public PayPal(Integer id, String reference, String branch) {
        super(id);
        this.reference = reference;
        this.branch = branch;
    }

    protected void printDataPayment() {
        System.out.println("id: " + id);
    }
}
