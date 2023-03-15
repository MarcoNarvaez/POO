from payment import Payment

class Card(Payment):
    def __init__(self, id, bank, expireDate, cvv):
        super().__init__(id)
        self.bank = bank
        self.expireDate = expireDate
        self.cvv = cvv