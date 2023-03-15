from payment import Payment

class PayPal(Payment):
    def __init__(self, id, reference, branch):
        super().__init__(id)
        self.reference = reference
        self.branch = branch